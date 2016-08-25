<?php

namespace Amateur\UserBundle\Services;



use Amateur\ObjectBundle\Entity\User;
use Amateur\ObjectBundle\Entity\Constant;
use Amateur\ObjectBundle\Entity\Event;	
use Amateur\ObjectBundle\Entity\Enrolled;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Common\Collections\Doctrine\Common\Collections;
use Amateur\ObjectBundle\Entity\Amateur\ObjectBundle\Entity;
use Xtending\ServicesBundle\Services\GeolocationServices;
use Assetic\Cache\ArrayCache;
/**
 * NewsUser Services.
 *
 * 
 */
class UserServices 
{

	protected $controller;
	
	protected $geolocationServices;
	
	/**
	 *
	 * @param $controller
	 */
	public function __construct($controller)
	{
		$this->controller = $controller;
		$this->geolocationServices = new GeolocationServices($controller);
	}
    
	
	/**
	 * Obtiene la cantidad de usuarios del sistema
	 * 
	 * @param NewsUser $newsUser
	 */
	public function cantUser(){
		return $this->cantObject('ObjectBundle:User');
	}
	
	/**
	 * Obtiene la cantidad de un objeto en la base de datos
	 * 
	 * @param String $object, nombre del objeti tipo: "ObjectBundle:User"
	 * @return int
	 */
	public function cantObject($object){
		
		$em = $this->controller->getDoctrine()->getManager();
		$respository = $em->getRepository($object);
		
		$query = $respository
		->createQueryBuilder('u')
		->select('count(u)')
		->getQuery()
		;
		
		$total = $query->getSingleResult();
		
		return $total[1];
	}
	
	/**
	 * Obtener usuario por Ciudad
	 *
	 * @param NewsUser $newsUser
	 */
	public function getUserByCity($city){
	
		$em = $this->controller->getDoctrine()->getManager();
		$users = $em->getRepository('ObjectBundle:User')->findBy(array('city' => $city));

		return $users;
	}
	
	/**
	 * Obtiene los amigos de tus amigos que no son tus amigos.
	 * 
	 * @param User $user
	 * @return \Doctrine\Common\Collections\ArrayCollection
	 */
	public function getFriendFromFriend(User $user){
		
		$friends = $user->getFriendsUser();
		
		$userRecomend = new ArrayCollection();
		
		foreach($friends as $friend) {
		
			foreach($friend->getFriends() as $friendOfFriend) {
			
				if(!$friends->contains($friendOfFriend->getUserFriend())){ //Solo agrega los amigos de tus amigos que no son tus amigos
					if(!$userRecomend->contains($friendOfFriend->getUserFriend()) &&  $user != $friendOfFriend->getUserFriend()){	
						$userRecomend->add($friendOfFriend->getUserFriend());
							if($userRecomend->count() > 4){//hasta cuatro
								return $userRecomend;
							}
						}
					
				}
			}
		}
		
		return $userRecomend;
		
	}
	
	public function getUserAroundMy(User $user){
	

		$userRecomend = new ArrayCollection();
		$cant = 0;
		
		if($user->getLatitude() != null){
		
		
		$ids = $this->geolocationServices->getIdObjetAroundDistance($user->getLatitude(), $user->getLongitude(), 5,'user');
	
		$userIds[] = array();
		
			foreach($ids as $f) {
				$userIds[$cant] = $f['id'];
				$cant = $cant +1;
			}
	
		$em = $this->controller->getDoctrine()->getManager();
		$qb = $em->createQueryBuilder();
		}
		
		if($cant != 0){
			$users =  $qb->select("e")
			->add('from', 'ObjectBundle:User e')
			->where('e.id IN (:ids)')
			->setParameter('ids', $userIds)
			->setFirstResult(0)
			->setMaxResults(50)->getQuery ()->execute();;
			$friendUser = $user->getFriendsAndFolloweUser();
			
		
			$userRecomend = $this->notFriend($friendUser, $users, $user);
			

		}
		
		
		return  $userRecomend;
	}
	
	/**
	 * 
	 * Revisa los notfriend para ver que no tenga amigos del usuario logueado y tambien saca el usuario logueado de la lista $friends
	 * 
	 * @param ArrayCollection $friends
	 * @param ArrayCollection $notfriends
	 * @param User $user
	 * @return \Doctrine\Common\Collections\ArrayCollection
	 */
	public function notFriend($friends, $notfriends, $user){
		
		$userRecomend = new  ArrayCollection();

		foreach($notfriends as $user1) {
		
			if(!$friends->contains($user1) && $user1 != $user){ //comprobamos que los usuarios encontrados no sean amigos mios y que no sea yo
				$userRecomend->add($user1);
				if($userRecomend->count() > 4){//hasta cuatro usuarios
					return $userRecomend;
				}
			}
		
		}
		
		return $userRecomend;
	}
	
	/**
	 * Obtienen los usuarios que tienen mas amigos (por ahora solo filtra por pais)
	 */
	public function getUserOrdenByFriend(){
		
		
		$em = $this->controller->getDoctrine()->getManager();
		
		
		$qb = $em->createQueryBuilder();
		$query =  $qb->select("e")
		->add('from', 'ObjectBundle:User e')
		->innerJoin('e.friends','f')
		->orderBy('e.id', 'ASC')
		->setFirstResult(0)
		->setMaxResults(10)->getQuery ();
		
		$paginator = new Paginator($query, $fetchJoinCollectio  = true);
		
		return $paginator;

		
	}

	/**
	 *  Obtiene un amigo de acuerdo al Id Usuario y Id Amigo.
	 */
	public function getFriendByUserFriend($idUser,$idFriend){
	
	
		$em = $this->controller->getDoctrine()->getManager();
	
		$friend = new ArrayCollection();
		
		$qb = $em->createQueryBuilder();
		$friend =  $qb->select("f")
		->add('from', 'ObjectBundle:Friend f')
		->innerJoin('f.user','u')
		->innerJoin('f.userFriend','uf')
		->where('u.id = :idUser')
		->andWhere('uf.id = :idFriend')
		->setParameter('idUser', $idUser)
		->setParameter('idFriend', $idFriend)
		->getQuery ()->getSingleResult();
	
		return  $friend;
	}
	
	/**
	 *  Obtiene los amigos de te siguen usuario.
	 */
	public function getFolloweds($idFriend){
	
	
		$em = $this->controller->getDoctrine()->getManager();
	
		$followeds = new ArrayCollection();
	
		$qb = $em->createQueryBuilder();
		$followeds =  $qb->select("f")
		->add('from', 'ObjectBundle:Friend f')
		->innerJoin('f.userFriend','uf')
		->andWhere('uf.id = :idFriend')
		->setParameter('idFriend', $idFriend)
		->getQuery ()
		->execute();
	
		return  $followeds;
	
	
	}
	
	/**
	 *  Obtiene los amigos (User) que siguen a un usuario
	 */
	public function getFollowedsUser($idFriend){
	
		$followeds =  $this->getFolloweds($idFriend);
		
		$user = new ArrayCollection();
	
		foreach($followeds as $friend) {
	
			if($friend->getTipeFriend() == 1){
				$user->add( $friend->getUser());
			}
		}
	
	
		return  $user;
	
	
	}
	
	private function isMyFriend($friend, $userFriend){
		
		
		return $friend->contains($userFriend);
	}
	
	/**
	 * Lista todos  los organizadores del sistema.
	 */
	public function getAllOrganizer()
	{
		$em = $this->controller->getDoctrine()->getManager();
	
		$qb = $em->createQueryBuilder();
		$entities =  $qb->select("e")
		->add('from', 'ObjectBundle:Organizer e')
		->getQuery ()
		->execute();
	
	
		return $entities;
	}
	
	
}
