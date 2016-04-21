<?php

namespace Amateur\EventBundle\Services;

use Symfony\Component\HttpFoundation\Request;
use Amateur\ObjectBundle\Entity\Punctuation;
use Doctrine\ORM\NoResultException;
use Amateur\ObjectBundle\Entity\Classification;
use Amateur\ObjectBundle\Entity\Enrolled;
use Amateur\ObjectBundle\Entity\User;
use Amateur\NewsUserBundle\Services\NewsUserServices;
use Amateur\ObjectBundle\Entity\Event;
use Xtending\ServicesBundle\Services\ExcelServices;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\ORM\Query\AST\Join;
use Amateur\ObjectBundle\Entity\EventPath;
use Doctrine\Common\Collections\Collection;
use Xtending\ServicesBundle\Services\GeolocationServices;





/**
 * @author jonatan
 *
 */
class EventServices 
{

	protected $controller;
	
	protected $newsUserServices;
	
	protected $excelServices;
	
	protected $geolocationServices;
	
	/**
	 * 
	 * @param $controller
	 */
	public function __construct($controller)
	{
		$this->controller = $controller;
		$this->newsUserServices = new NewsUserServices($controller);
		$this->excelServices  = new ExcelServices($controller);
		$this->geolocationServices = new GeolocationServices($controller);
	}
	
	/**
	 * Obtiene los proximos eventos a ocurrir
	 * 
	 * @param Paginator $paginator
	 * @return \Doctrine\ORM\Tools\Pagination\Paginator
	 */
	public function nextEvent($paginator){

		$em = $this->controller->getDoctrine()->getManager();
		

		$qb = $em->createQueryBuilder();
		$query =  $qb->select("e")
		->add('from', 'ObjectBundle:Event e')
		->where('e.startTime > :today')
		->andWhere('e.isActive = :active')
		->setParameter('active', 1)
		->setParameter('today', date("Y-m-d"))
		->orderBy('e.startTime', 'ASC')
		->setFirstResult($paginator['firstResult'])
		->setMaxResults($paginator['maxResults'])->getQuery ();

		$paginator = new Paginator($query, $fetchJoinCollectio  = true);
		
		return $paginator;
		
	}
	
	/**
	 * Obtiene los eventos que tienen los resultados cargados.
	 *
	 * @param Paginator $paginator
	 * @return \Doctrine\ORM\Tools\Pagination\Paginator
	 */
	public function lastResultEvent($paginator){
	
		$em = $this->controller->getDoctrine()->getManager();
	
		
		$qb = $em->createQueryBuilder();
		$query =  $qb->select("e")
		->add('from', 'ObjectBundle:Event e')
		->innerJoin('e.classifications','c')
		->orderBy('e.startTime', 'DESC')
		->setFirstResult($paginator['firstResult'])
		->setMaxResults($paginator['maxResults'])->getQuery ();
	
		$paginator = new Paginator($query, $fetchJoinCollectio  = true);
	
		return $paginator;
	
	}
	
	/**
	 * Obtiene los eventos que no tienen cargados los resultados.
	 *
	 * @param Paginator $paginator
	 * @return \Doctrine\ORM\Tools\Pagination\Paginator
	 */
	public function lastEventWithOutResultEvent($paginator){
	
		$em = $this->controller->getDoctrine()->getManager();
	
		$qb2 = $em->createQueryBuilder();
		$qb = $em->createQueryBuilder();
		$querySub =  $qb2->select("e")
		->add('from', 'ObjectBundle:Event e')
		->innerJoin('e.classifications','c');
		
		$query = $qb->select("ev")->from('ObjectBundle:Event','ev')
				->where($qb->expr()
				->notIn('ev.id',$querySub->getDQL()))
				->andWhere('ev.startTime < :today')
				->andWhere('ev.isActive = :active')
				->setParameters(array(
								'active' => 1,
								'today' => date("Y-m-d"),))
								
						->setFirstResult($paginator['firstResult'])
						->setMaxResults($paginator['maxResults'])
						->orderBy('ev.startTime', 'DESC')
				->getQuery();
		
		$paginator = new Paginator($query, $fetchJoinCollectio  = true);
	
		return $paginator;
	
	}
	
	/**
	 * Obtiene los  eventos que ocurren en el dia
	 *
	 * @return ArrayCollection
	 */
	public function getToDayEvents(){
	
		$em = $this->controller->getDoctrine()->getManager();
	
		$qb = $em->createQueryBuilder();
		
		$events =  $qb->select("e")
		->add('from', 'ObjectBundle:Event e')
		->where('e.startTime = :today')
		->andWhere('e.isActive = :active')
		->setParameter('active', 1)
		->setParameter('today', date("Y-m-d"))
		->orderBy('e.startTime', 'ASC')->getQuery ()->getResult();
	
		return $events;
	
	}
	
	/**
	 * Obtiene los  eventos que ocurren en el dia
	 *
	 * @return ArrayCollection
	 */
	public function getPointsEvent($idEvent,$name){
	
		$em = $this->controller->getDoctrine()->getManager();
	
		$qb = $em->createQueryBuilder();
	
		$eventsPath =  $qb->select("e")
		->add('from', 'ObjectBundle:EventPath e')
		->where('e.event = :eventId')
		->andWhere('e.idPath = :idPath')->
		orderBy('e.time', 'ASC')
		->setParameter('eventId', $idEvent)
		->setParameter('idPath', $name)->getQuery ()->getResult();
	
		return $eventsPath;
	
	}
	
	/**
	 * Obtiene el ultimo puento del camino online
	 *
	 * @return ArrayCollection
	 */
	public function getLastPointEvent($idEvent,$name){
	
		$em = $this->controller->getDoctrine()->getManager();
	
		$qb = $em->createQueryBuilder();
	
		$eventsPath =  $qb->select("e")
		->add('from', 'ObjectBundle:EventPath e')
		->where('e.event = :eventId')
		->andWhere('e.idPath = :idPath')
		->setParameter('eventId', $idEvent)
		->setParameter('idPath', $name)
		->setMaxResults(1)->
		orderBy('e.time', 'DESC')->
		
		getQuery ()->getResult();
		
		if(!empty($eventsPath)){
			$eventPath = $eventsPath[0];
		}else{$eventPath = null;}
		
	
		return $eventPath;
	
	}
	
	/**
	 * Obtiene los  eventos pasados
	 *
	 * @param Paginator $paginator
	 * @return \Doctrine\ORM\Tools\Pagination\Paginator
	 */
	public function pastEvent($paginator){
	
		$em = $this->controller->getDoctrine()->getManager();
	
	
		$qb = $em->createQueryBuilder();
		$query =  $qb->select("e")
		->add('from', 'ObjectBundle:Event e')
		->where('e.startTime <= :today')
		->andWhere('e.isActive = :active')
		->setParameter('active', 1)
		->setParameter('today', date("Y-m-d"))
		->orderBy('e.startTime', 'ASC')
		->setFirstResult($paginator['firstResult'])
		->setMaxResults($paginator['maxResults'])->getQuery ();
	
		$paginator = new Paginator($query, $fetchJoinCollectio  = true);
	
		return $paginator;
	
	}
	
	/**
	 * Obtiene los  eventos proximos por deporte
	 *
	 * @param Paginator $paginator
	 * @return \Doctrine\ORM\Tools\Pagination\Paginator
	 */
	public function getEventNextBySport($idSport,$paginator){
	
		$em = $this->controller->getDoctrine()->getManager();
	
	
		$qb = $em->createQueryBuilder();
		$query =  $qb->select("e")
		->add('from', 'ObjectBundle:Event e')
		->where('e.startTime > :today')
		->andWhere('e.isActive = :active')
		->andWhere('e.sport = :sport')
		->setParameter('sport', $idSport)
		->setParameter('active', 1)
		->setParameter('today', date("Y-m-d"))
		->orderBy('e.startTime', 'ASC')
		->setFirstResult($paginator['firstResult'])
		->setMaxResults($paginator['maxResults'])->getQuery ();
	
		$paginator = new Paginator($query, $fetchJoinCollectio  = true);
	
		return $paginator;
	
	}
	

	
	
	public function createPunctuation(Punctuation $puntuation,$idEvent){
		
		$puntuation->setTotal(($puntuation->getLocation()
							  +$puntuation->getCircuit()
							  +$puntuation->getOrganization()
							  +$puntuation->getNutrition()
							  +$puntuation->getPunctuality()
							  +$puntuation->getAssistance()
							  +$puntuation->getKit())/7);
		
		if(!$this->validateEnrolled($idEvent,$this->controller->getUser()->getId())){
		$em = $this->controller->getDoctrine()->getManager();
		$qb = $em->createQueryBuilder();
		 
		$enrolle =  $qb->select("en")
		->add('from', 'ObjectBundle:Enrolled en')
		->innerJoin('en.event','e')
		->innerJoin('en.user','u')
		->where('e.id = :idEvent')
		->andWhere('u.id = :idUser')
		->setParameter('idEvent', $idEvent)
		->setParameter('idUser', $this->controller->getUser()->getId())->getQuery ()
		->getSingleResult();

		
		$enrolle->setPunctuation($puntuation);
		$em->persist($puntuation);
		$em->flush();
		}
		return true;
	}
	
	public function getFriendFromEventByUser(Event $event,User $user){
		
		$em = $this->controller->getDoctrine()->getManager();
		$qb = $em->createQueryBuilder();
		$idsFriend = array();
		$friends = $user->getFriends();
		foreach ($friends as $friend){
			$idsFriend[] = $friend->getId();
		
		}
		if(count($idsFriend)>0){
			$enrolleds =  $qb->select("en")
			->add('from', 'ObjectBundle:Enrolled en')
			->innerJoin('en.event','e')
			->innerJoin('en.user','u')
			->where('e.id = :idEvent')
			->andWhere('u.id IN (:idUser)')
			->setParameter('idEvent', $event->getId())
			->setParameter('idUser', $idsFriend)->getQuery ()
			->getResult();
			
			$friends = new ArrayCollection();
			
			foreach ($enrolleds as $enrolle){
				$friends->add($enrolle->getUser());
			}
		}
		
		
		return $friends;
	}
	
	public function validateEnrolled($idEvent,$idUser){
		 
		$em = $this->controller->getDoctrine()->getManager();
		$qb = $em->createQueryBuilder();
		try {
	
			$qb->select("en")
			->add('from', 'ObjectBundle:Enrolled en')
			->innerJoin('en.event','e')
			->innerJoin('en.user','u')
			->where('e.id = :idEvent')
			->andWhere('u.id = :idUsuario')
			->setParameter('idEvent', $idEvent)
			->setParameter('idUsuario', $idUser)->getQuery ()
			->getSingleResult();
		} catch (NoResultException $e) {
			return true;
		}
		 
		return false;
		 
	}
	
	public function asigneResultEvent($idClassification,$idEvent,$user){

		$em = $this->controller->getDoctrine()->getManager();
		$qb = $em->createQueryBuilder();
		try {
			//Obtengo la inscripcion
			$enrolled =	$qb->select("en")
			->add('from', 'ObjectBundle:Enrolled en')
			->innerJoin('en.event','e')
			->innerJoin('en.user','u')
			->where('e.id = :idEvent')
			->andWhere('u.id = :idUsuario')
			->setParameter('idEvent', $idEvent)
			->setParameter('idUsuario', $user->getId())->getQuery ()
			->getSingleResult();
			
			
			
		} catch (NoResultException $e) {
			//Se crea la inscripcion si no existia
			$event =  $em->getRepository('ObjectBundle:Event')->find($idEvent);
			$enrolled = new Enrolled();
			$enrolled->setUser($user);
			$enrolled->setEvent($event);
			
		}
		
		
		//Compruebo que solo una ves se le asigne
		if($enrolled->getClassification() == null){
			//Asigno la clasificacion a la inscripcion
			$classification =  $em->getRepository('ObjectBundle:Classification')->find($idClassification);
			$classification->setIsUser(2);
			$enrolled->setClassification($classification);
			$classification->setEnrolled($enrolled);
			$em->persist($classification);
			$em->persist($enrolled);
			$em->flush();
		}
		
		
		
		return true;
		 
	}
	
	/**
	 * Busca resultados del usuario logueado en los resultados cargados.
	 * 
	 * @param User $user
	 * @return ArrayCollection
	 */
	public function searchResult(User $user){
		
		$em = $this->controller->getDoctrine()->getManager();

		$classifications = $em->getRepository("ObjectBundle:Classification")->createQueryBuilder('u')
		->where('u.name LIKE :name')
		->andWhere('u.lastname LIKE :lastname')
		->andWhere('u.isUser != :isUser')
		->setParameter('name', '%'.$user->getName().'%')
		->setParameter('lastname', '%'.$user->getLastname().'%')
		->setParameter('isUser', 2)
		->getQuery()
		->getResult();

		return $classifications;
		
	}

	/**
	 * Busca resultados por nombre, apellido o codigo
	 * 
	 * @param string $search
	 * @param int $idEvent
	 * @return ArrayCollection 
	 */
	public function searchResultByNameAndBib($search,$idEvent){
	
		$em = $this->controller->getDoctrine()->getManager();
	
		$classifications = $em->getRepository("ObjectBundle:Classification")->createQueryBuilder('u')
		->innerJoin('u.event','e')
		->where('u.name LIKE :search')
		->orWhere('u.lastname LIKE :search')
		->orWhere('u.bib LIKE :search')
		->andWhere('e.id = :idEvent')
		->setParameter('search', '%'.$search.'%')
		->setParameter('idEvent', $idEvent)
		->getQuery()
		->getResult();
	
		return $classifications;
	
	}
	/**
	 * Crea un evento 
	 * 
	 * @param Event $event
	 * @return Event
	 */
	public function createEvent(Event $event){
		
		
		$result = $this->excelServices->importExcelResult($event,$event->getLabelLink());
		$event->setClassifications($result);
		$this->excelServices->removeFile($event->getLabelLink());
		$event->setLabelLink("");
		
		
		$em = $this->controller->getDoctrine()->getManager();
		$event->setStartTime(date("Y-m-d", strtotime($event->getStartTime())));
		
		$em->persist($event);
		$em->flush();
		
		//Si no esta activo no se crea la notificacion
		if($event->getIsActive()){
			$this->newsUserServices->createEvent($event);
		}
		return $event;
		
	}
	
	public function createEnrolled($idEvent,$tiempo,$distancia,User $user){
		
		$em = $this->controller->getDoctrine()->getManager();
		
		$event = $em->getRepository('ObjectBundle:Event')->find($idEvent);
		$category = $em->getRepository('ObjectBundle:Category')->find($distancia);
		
		$enrolled  = new Enrolled();
		if ( $this->validateEnrolled($event->getId(),$user->getId()) ){
			
			$enrolled->setUser($user);
			$enrolled->setEvent($event); 
			$enrolled->setObjetive($tiempo);
			$enrolled->setCategory($category);
			$user->addRegistration($enrolled);
		
			$em->persist($user);
			$em->flush();
			
			$this->newsUserServices->createEnrolledEvent($enrolled,$event);
			
		}else {
			$enrolled = null;
		}
		
		return $enrolled;
	}
	
	/**
	 * 
	 * Obtiene los eventos del usuario que esta inscripto y que ya ocurrieron.
	 * 
	 * @param User $user
	 * @param Array $paginator contiene los limites de la busqueda para pagina (firstResult,maxResults)
	 * @return ArrayCollection Events
	 */
	public function getEventEnrolledUserPast(User $user,$paginator){
	
		$events = $this->getEventEnrolledUser($user,$paginator,"<=");
	
		return $events;
	}
	
	/**
	 *
	 * Obtiene los eventos del usuario que esta inscripto y que no ocurrieron.
	 *
	 * @param User $user
	 * @param Array $paginator contiene los limites de la busqueda para pagina (firstResult,maxResults)
	 * @return ArrayCollection Events
	 */
	public function getEventEnrolledUserNext(User $user,$paginator){
	
		$events = $this->getEventEnrolledUser($user,$paginator,">");
	
		return $events;
	}
	
	public function getEventEnrolledUser(User $user,$paginator,$time){
		
		$em = $this->controller->getDoctrine()->getManager();
		
		$qb = $em->createQueryBuilder();
		
		$query =  $qb->select("en")
		->add('from', 'ObjectBundle:Enrolled en')
		->innerJoin('en.event','e')
		->innerJoin('en.user','u')
		->where('e.startTime '.$time.' :today')
		->andWhere('u.id <= :idUser')
		->setParameter('today', date("Y-m-d"))
		->setParameter('idUser', $user->getId())
		->orderBy('e.startTime', 'DESC')
		->setFirstResult($paginator['firstResult'])
		->setMaxResults($paginator['maxResults'])->getQuery ();
		
		$paginator = new Paginator($query, $fetchJoinCollectio  = true);
		
		
		$events = new ArrayCollection();
		
		foreach ($paginator as $en){
			$events->add($en->getEvent());
		
		}
		
		return $events;
	}
	
	
	public function getNewsUserAndFriends($user,$firstResult,$maxResults){
	
		$em = $this->controller->getDoctrine()->getManager();
	
		$qb = $em->createQueryBuilder();
	
		$friends = $user->getFriends();
	
		$ids = array();
		foreach($friends as $f) {
			$ids[] = $f->getId();
		}
		$ids[] = $user->getId();
	
		$query =  $qb->select("nu")
		->add('from', 'ObjectBundle:NewsUser nu')
		->andWhere('nu.user IN (:ids)')
		->setParameter('ids', $ids)->orderBy('nu.id', 'DESC')
		->setFirstResult($firstResult)
		->setMaxResults($maxResults)->getQuery ();
			
		$paginator = new Paginator($query, $fetchJoinCollectio  = true);
	
		return  $paginator;
	
	}
	
	/**
	 * Busqueda de eventos
	 * 
	 * @param unknown $search
	 * @return unknown
	 */
	public function seachEvent($search)
	{
		$em = $this->controller->getDoctrine()->getManager();
		
		$entities = $em->getRepository("ObjectBundle:Event")->createQueryBuilder('u')
		->innerJoin('u.categories','ca')
		->innerJoin('u.sport','s')
		->orWhere('s.name LIKE :search')
		->orWhere('ca.distanceTotal LIKE :search')
		->orWhere('u.city LIKE :search')
		->orWhere('u.province LIKE :search')
		->orWhere('u.country LIKE :search')
		->orwhere('u.name LIKE :search')
		->andWhere('u.isActive = :active')
		->setParameter('active', 1)
		->setParameter('search', '%'.$search.'%')
		->getQuery()
		->getResult();
		 
		return $entities;
	}
	
	/**
	 * Obtener Clasificacion de evento por id evento
	 *
	 * @param int $idEvent
	 * @return ArrayCollection Classification
	 */
	public function getClassificationByIdEventEvent($firstResult,$maxResults,$idEvent)
	{
		$em = $this->controller->getDoctrine()->getManager();
	
		$query = $em->getRepository("ObjectBundle:Classification")->createQueryBuilder('u')
		->where('u.event = :idEvent')
// 		->andWhere('u.isUser = :isUser')
		->orderBy('u.overallRank', 'ASC')
		->setParameter('idEvent', $idEvent)
// 		->setParameter('isUser', 0)
		
		->setFirstResult($firstResult)
		->setMaxResults($maxResults)->getQuery();
			
		$paginator = new Paginator($query, $fetchJoinCollectio  = true);
	
			
		return $paginator;
	}
	
	/**
	 * Obtener Clasificacion de evento por id evento
	 *
	 * @param int $idEvent
	 * @return ArrayCollection Classification
	 */
	public function getClassificationByIdEvent($idEvent)
	{
		$em = $this->controller->getDoctrine()->getManager();
	
		$query = $em->getRepository("ObjectBundle:Classification")->createQueryBuilder('u')
		->where('u.event = :idEvent')
		->andWhere('u.isUser = :isUser')
		->orderBy('u.overallRank', 'ASC')
		->setParameter('idEvent', $idEvent)
		->setParameter('isUser', 0)->getQuery()->getResult();
			
		return $query;
	}
	
	public function calculateDistanceForPathEvent($eventPaths){
		
		$distance = 0;
		if(!empty($eventPaths)){
			$eventPath1 = $eventPaths[0];
			
			foreach($eventPaths as $eventPath) {
				
				$distance = $distance + $this->calculateDistanceBetweenPoint($eventPath1->getLatitude(), $eventPath1->getLatitude(),
						 $eventPath->getLatitude(), $eventPath->getLatitude(), "K");
				
				
				$eventPath1 = $eventPath;
			}
		}
		return $distance;
		
	}
	
	/**
	 * Calculo los intervalos cada un kilometro de un usuario que participo o participa en un evento
	 * 
	 * @param ArrayCollection $eventPaths Contiene los puntos recorridos por el usuario.
	 * @return Ambigous <multitype:, string>
	 */
	public function calculateStatisticsForPathEvent($eventPaths){
	
		$statistics = array();
		$distance = 0;
		$cant = 1;
	
		$eventPath1 = $eventPaths[0];
		$eventPathFirst = $eventPaths[0]; 
		foreach($eventPaths as $eventPath) {
				
			$distance = $distance + $this->calculateDistanceBetweenPoint($eventPath1->getLatitude(), $eventPath1->getLatitude(),
					$eventPath->getLatitude(), $eventPath->getLatitude(), "K");
			
			if($distance >= $cant){
				$statistics[$cant]['interval'] = $cant;
				$statistics[$cant]['distancia'] = 1;
				$statistics[$cant]['distanciaAcumulado'] = round($distance,2);
				$statistics[$cant]['time'] = gmdate("i:s",$this->
				calculateTimeMinuteBetweeDate(strtotime($eventPathFirst->getTime()), 
						strtotime($eventPath->getTime()))/1);
				
				$eventPathFirst = $eventPath;
				$cant = $cant +1;
			}
				
			$eventPath1 = $eventPath;
		}
		if(!empty($eventPaths)){
			
			$statistics[$cant]['interval'] = $cant;
			$statistics[$cant]['distancia'] = 1;
			$statistics[$cant]['distanciaAcumulado'] = round($distance,2);
			$statistics[$cant]['time'] = gmdate("i:s",$this->
				calculateTimeMinuteBetweeDate(strtotime($eventPathFirst->getTime()),
						strtotime(end($eventPaths)->getTime()))/1);
		}
		
	
		return $statistics;
	
	}
	
	/**
	 * @param Timestamp $older
	 * @param Timestamp $newer
	 * @return number
	 */
	public function calculateTimeMinuteBetweeDate($older,$newer){
		
		$s =  $newer - $older;
	
		
		return $s; 
		
	}
	
	
	public function calculateDistanceBetweenPoint($lat1, $lon1, $lat2, $lon2, $unit){
		
		$radius = 6378.137; // earth mean radius defined by WGS84
		$dlon = $lon1 - $lon2;
		$distance = acos( sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($dlon))) * $radius;
		
		if ($unit == "K") {
			return ($distance);
		} else if ($unit == "M") {
			return ($distance * 0.621371192);
		} else if ($unit == "N") {
			return ($distance * 0.539956803);
		} else {
			return 0;
		}
		
		
	}
	
	public function getEventAroundMy(User $user,$paginator){
		
		$ids = $this->geolocationServices->getIdObjetAroundDistance($user->getLatitude(), $user->getLongitude(), 50,'event');
		
		$eventIds[] = array();
		$cant = 0;
		foreach($ids as $f) {
			$eventIds[$cant] = $f['id'];
			$cant = $cant +1;
		}

		$em = $this->controller->getDoctrine()->getManager();
		$qb = $em->createQueryBuilder();
		
		$query =  $qb->select("e")
		->add('from', 'ObjectBundle:Event e')
		->where('e.startTime > :today')
		->andWhere('e.isActive = :active')
		->andWhere('e.id IN (:ids)')
		->setParameter('active', 1)
		->setParameter('today', date("Y-m-d"))
		->setParameter('ids', $eventIds)->orderBy('e.startTime', 'ASC')
		->setFirstResult($paginator['firstResult'])
		->setMaxResults($paginator['maxResults'])->getQuery ();
		
		$paginator = new Paginator($query, $fetchJoinCollectio  = true);
		
		return  $paginator;
	}
	
	/**
	 * Obtiene los proximos eventos a ocurrir
	 *
	 * @param Paginator $paginator
	 * @return \Doctrine\ORM\Tools\Pagination\Paginator
	 */
	public function listEventByOrganizer($paginator,$organizerId){
	
		$em = $this->controller->getDoctrine()->getManager();
	
	
		$qb = $em->createQueryBuilder();
		$query =  $qb->select("e")
		->add('from', 'ObjectBundle:Event e')
		->andWhere('e.organizer = :organizer')
		->setParameter('organizer', $organizerId)
		->orderBy('e.startTime', 'ASC')
		->setFirstResult($paginator['firstResult'])
		->setMaxResults($paginator['maxResults'])->getQuery ();
	
		$paginator = new Paginator($query, $fetchJoinCollectio  = true);
	
		return $paginator;
	
	}
}
