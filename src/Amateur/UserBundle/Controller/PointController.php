<?php

namespace Amateur\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Amateur\ObjectBundle\Entity\User;
use Amateur\UserBundle\Form\UserType;
use Amateur\ObjectBundle\Entity\Enrolled;
use Assetic\Exception\Exception;
use Doctrine\ORM\NoResultException;
use Amateur\EventBundle\Services\EventServices;
use Amateur\NewsUserBundle\Services\NewsUserServices;
use Amateur\UserBundle\Services\UserServices;
use Amateur\EventBundle\Services\EventReportsServices;
use Amateur\EventBundle\Form\EnrolledType;
use Symfony\Component\HttpFoundation\Response;
use Xtending\ServicesBundle\Services\MailerServices;
use Amateur\ObjectBundle\Entity\ActivityLogUsers;
use Amateur\ObjectBundle\Entity\Organizer;
use Amateur\ObjectBundle\Entity\Amateur\ObjectBundle\Entity;
use Amateur\UserBundle\Form\OrganizerType;
use Amateur\UserBundle\Form\Amateur\UserBundle\Form;
use Amateur\ObjectBundle\Entity\UserConfiguration;
use Amateur\ObjectBundle\Entity\Friend;




/**
 * User controller.
 *
 * @Route("/user")
 */
class UserController extends Controller
{
	
	/**
	 * @var EventServices
	 */
	protected $eventServices;
	
	/**
	 * @var NewsUserServices
	 */
	protected $newsUserServices;
	
	protected $userServices;
	
	protected $eventRepostsServices;
	
	protected $emailServices;
	
	
	public function __construct()
	{
		$this->eventRepostsServices = new EventReportsServices($this);
		$this->eventServices = new EventServices($this);
		$this->newsUserServices = new NewsUserServices($this);
		$this->userServices = new UserServices($this);
		$this->emailServices = new MailerServices($this);
	
	}

 

    /**
     * Busca todos los usuarios por nombre y apellido con considen con el parametro search
     *
     * @Route("/users", name="users")
     * @Method("GET")
     * @Template("UserBundle:User:users.html.twig")
     */
    public function usersAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
    	$search = $request->get("search");
    	//$entities = $em->getRepository('ObjectBundle:User')->findAll();
    	$entities = $em->getRepository("ObjectBundle:User")->createQueryBuilder('u')
    	->where('u.name LIKE :search')
    	->orWhere('u.lastname LIKE :search')
    	->orWhere('u.username LIKE :search')
    	->setParameter('search', '%'.$search.'%')
    	->getQuery()
    	->getResult();
    	
    	$events = $this->eventServices->seachEvent($search);
    	
    	
    	return array(
    			'entities' => $entities,
    			'events' => $events,
    			'type' => 'search',
    			'tipe'=> '',
    	);
    }
    
    /**
     * Obtiene todo los amigos del usuario logueado
     *
     * @Route("/friends", name="friends")
     * @Method("GET")
     * @Template("UserBundle:User:users.html.twig")
     */
    public function friendsAction()
    {
    	
    	$entities = $this->getUser()->getFriendsUser();
    	
    	return array(
    			'entities' => $entities,
    			'type' => 'friends',
    			'tipe'=> '',
    	);
    }
    
    /**
     * Sugiere amigos a los usuarios logueados.
     *
     * @Route("/know", name="know_friends")
     * @Method("GET")
     * @Template("UserBundle:User:list_users.html.twig")
     */
     public function knowUserAction(){
    	
     	if(date("s") > 30){
     	
     		$entities = $this->userServices->getFriendFromFriend($this->getUser());
     	}else{
     		$entities = $this->userServices->getUserAroundMy($this->getUser());
     	} 
     	
     	if($entities->count() == 0){
     		$entities = $this->userServices->getUserOrdenByFriend();
     		$entities = $this->userServices->notFriend($this->getUser()->getFriendsUser(), $entities, $this->getUser());
     	}
     	
     	
     	return array(
     			'entities' => $entities,
     			'type' => '',
     			'tipe'=> '',
     	);
     	
     }
    
    /**
     * Obtiene las interacciones del usuario logueado
     * 
     * @Route("/user/interaction", name="user_interaction")
     * @Method("GET")
     * @Template("UserBundle:User:listUsersInteraction.html.twig")
     */
    public function listInteractioAction()
    {
    
    	$friend = $this->getUser()->getFriendsUser();
    	$follower = $this->getUser()->getFollowerUser();
    	$followed =  $this->userServices->getFollowedsUser($this->getUser()->getId());
    
    	return array(
    			'friend' => $friend,
    			'follower' => $follower,
    			'followed' => $followed,
    			'type' => 'friends',
    			'tipe'=> '',
    	);
    }
    
    /**
     * Lista todos los amigos del usuario logueado via AJAX
     * 
     * @Route("/friends/ajax", name="friends_ajax")
     * @Method("GET")
     * @Template("UserBundle:User:list_users.html.twig")
     * @todo Cambiar por uno que no diga AJAX.
     */
    public function friendsAjaxAction()
    {
    	 
    	$entities = $this->getUser()->getFriendsUser();
    	
    	return array(
    			'entities' => $entities,
    			'type' => 'friends',
    			'tipe'=> '',
    			
    	);
    }
    
    /**
     * Listar usuarios con mayor cantidad de amigos.
     *
     * @Route("/max/friends/user", name="max_friends_user")
     * @Method("GET")
     * @Template("UserBundle:User:list_users.html.twig")
     */
    public function maxFriendsUserAction()
    {
    
    	$entities = $this->userServices->getUserOrdenByFriend();
    	 
    	return array(
    			'entities' => $entities,
    			'type' => 'friends',
    			'tipe'=> '',
    			 
    	);
    }
    
    /**
     * Lists all User entities.
     *
     * @Route("/{idEvent}/{tiempo}/{distancia}/addRegistration", name="add_registration")
     * @Method("GET")
     * @Template("")
     */
    public function addRegistrationAction($tiempo,$distancia , $idEvent)
    {
    	
    
    	$this->eventServices->createEnrolled($idEvent,$tiempo,$distancia, $this->getUser());
    	
    	return new Response();
    }
    
    /**
     * Lists all User entities.
     *
     * @Route("/enrolled/{idErolled}/{userID}/show", name="show_enrolled")
     * @Method("GET")
     * @Template("UserBundle:UserResult:showEnrolled.html.twig")
     */
    public function showEnrolledAction($idErolled,$userID)
    {
    	 
    	$em = $this->getDoctrine()->getManager();
    	
    	$enrolled = $em->getRepository('ObjectBundle:Enrolled')->find($idErolled);
    	$user = $em->getRepository('ObjectBundle:User')->find($userID);

    	//Maneja la paginacion de la pagina
    	$url = $this->generateUrl('show_enrolled',array('idErolled' => $enrolled->getId(),'userID' =>$user->getId()));
    	
    	
    	return array(
    			'enrolled' => $enrolled,
    			'user'   => $user,
    			'classification'   => null,
    			'event' => $enrolled->getEvent(),
    			'url'  => $url,
    	);
    }

    
    /**
     * Creates a new User entity.
     *
     * @Route("/", name="user_create")
     * @Method("POST")
     * @Template("UserBundle:User:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new User();
        $form = $this->createForm(new UserType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
        	
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
		
            return $this->redirect($this->generateUrl('login'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }
    
    
    /**
     * Crear solicitud de amitad
     *
     * @Route("/send_request_friend/{id}", name="send_request_friend")
     * @Method("GET")
      * @Template("notification_ok.html.twig")
     */
    public function addNotificationFriendAction($id)
    {
    	$entity  = new User();
    	 
    	$em = $this->getDoctrine()->getManager();
    	 
    	$entity = $em->getRepository('ObjectBundle:User')->find($id);
    	
    	$this->newsUserServices->createFriendPending($this->getUser(),$entity);
    	 
    	return array(
            'message' => 'Se envio la solicitud',
        );
    }
    /**
     * Crea la relacion de amigos
     *
     * @Route("/add_friend/{id}", name="add_friend")
     * @Method("GET")
      * @Template("notification_ok.html.twig")
     */
    public function addFriendAction($id)
    {
    	$entity  = new User();
    	
    	$em = $this->getDoctrine()->getManager();
    	
    	$entity = $em->getRepository('ObjectBundle:User')->find($id);
    	
    	$this->newsUserServices->deleteFriendPending($this->getUser(),$entity);
    	
    	$friend =  new Friend();
    	$friend->setFriend($entity, $this->getUser());
    	$friend2 =  new Friend();
    	$friend2->setFriend($this->getUser(),$entity);
    	try{
    		
    		
    		$entity->addFriend($friend2);
    		$this->getUser()->addFriend($friend);
    		$em->persist($entity);
    		$em->persist($this->getUser());
    		$em->flush();
    	}catch(\Exception $e){
    		//Poner mensaje error
    	}
    	
        
    	return array(
            'message' => 'Se agrego a '.$entity->getUserName().' como amigo',
        );
    }

    /**
     * Eliminar amigo-
     *
     * @Route("/delete_friend/{id}", name="delete_friend")
     * @Method("GET")
     * @Template("notification_ok.html.twig")
     */
    public function deleteFriendAction($id)
    {
    	 
    	$em = $this->getDoctrine()->getManager();
   	
    	$friend = $this->userServices->getFriendByUserFriend($this->getUser()->getId(),$id);
    	$friend2 = $this->userServices->getFriendByUserFriend($id, $this->getUser()->getId());

    	try{
    		
    		$em->remove($friend);
    		$em->remove($friend2);
    		$em->flush();
    	}catch(\Exception $e){
    		return array(
    				'message' => 'Error al eliminar a tu amigos',
    		);
    	}
    	 
    
    	return array(
    			'message' => 'Se elimino con exito el amigo',
    	);
    }
    
    /**
     * Crea un seguidor.
     *
     * @Route("/add_follower/{id}", name="add_follower")
     * @Method("GET")
     * @Template("notification_ok.html.twig")
     */
    public function addFollowerAction($id)
    {
    	$entity  = new User();
    	 
    	$em = $this->getDoctrine()->getManager();
    	 
    	$entity = $em->getRepository('ObjectBundle:User')->find($id);

    	$friend =  new Friend();
    	$friend->setFollower($entity, $this->getUser());
    	try{
    		$this->getUser()->addFriend($friend);
    		$em->persist($this->getUser());
    		$em->flush();
    	}catch(\Exception $e){
    		//Poner mensaje error
    	}
    	 
    
    	return array(
    			'message' => 'Estas siguiendo a '.$entity->getUserName(),
    	);
    }
    
    /**
     * Displays a form to create a new User entity.
     *
     * @Route("/registration", name="user_new")
     * @Method("GET")
     * @Template("UserBundle:User:new.html.twig")
     */
    public function newAction()
    {
        $entity = new User();
        $form   = $this->createForm(new UserType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a User entity.
     *
     * @Route("/{id}/show", name="user_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObjectBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        
        //get reports
        $arrayEnrolled = $this->eventRepostsServices->getReportRunning($id);
        
        
        return array(
        	'arrayEnrolled' => $arrayEnrolled,
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     * @Route("/{id}/edit", name="user_edit")
     * @Method("GET")
     * @Template("UserBundle:User:UserConfiguration.html.twig")
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObjectBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        
        if ($entity->getUserCOnfiguration() == null) {
        	$userConfiguration = new UserConfiguration();
        	 
        	$userConfiguration->setActiveFollowMe(1);
        	$userConfiguration->setShareWith(2);
        	$userConfiguration->setUser($entity);
        	$entity->setUserConfiguration($userConfiguration);
        	$em->persist($entity);
        	$em->flush();
        }
        $editForm = $this->createForm(new UserType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    
    /**
     * Update the firstTime indicator
     *
     * @Route("/{id}/firstTime", name="user_update_first_time")
     * @Method("GET")
     * @Template("")
     */
    public function updateFirstTimeAction($id){
    	
    	$em = $this->getDoctrine()->getManager();
    	
    	$entity = $em->getRepository('ObjectBundle:User')->find($id);
    	$entity->setFirstTime(1);
    	
    	$em->persist($entity);
    	$em->flush();

    	return new Response();
    	
    }

    /**
     * Edits an existing User entity.
     *
     * @Route("/{id}/update", name="user_update")
     * @Method("POST")
     * @Template("UserBundle:User:UserConfiguration.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObjectBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new UserType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('user_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a User entity.
     *
     * @Route("/{id}", name="user_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ObjectBundle:User')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('user'));
    }

    /**
     * Creates a form to delete a User entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
      /**
     * Obtiene usuarios destacados en la red (tendria que ser segun el pais)
     *
     * @Route("/users/top", name="users_top")
     * @Method("GET")
     * @Template("UserBundle:User:list_users.html.twig")
     */
    public function getUserOrdenByFriendAction(){
    	
    	$users = $this->userServices->getUserOrdenByFriend(); 
    
    	return array(
    			'entities' => $users,
    			'events' => null,
    			'type' => 'friends',
    			'tipe'=> '',
    	);
    
    }
    
    /**
     * Admin Dashboard.
     *
     * @Route("/admin/dashboard", name="admin_dashboard")
     * @Method("GET")
     * @Template("UserBundle:UserAdmin:dashboard.html.twig")
     */
    public function showDashboardAction()
    {
    	return array();
    
    }
    
    /**
     * Obtiene la cantidad de usuarios del sistema.
     *
     * @Route("/admin/cant/user", name="admin_dashboard_cant_user")
     * @Method("GET")
     * @Template("")
     */
    public function getCantUsersAction()
    {
    	return new Response($this->userServices->cantUser());;
    
    }
    
    /**
     * Obtiene la cantidad de eventos del sistema.
     *
     * @Route("/admin/cant/events", name="admin_dashboard_cant_events")
     * @Method("GET")
     * @Template("")
     */
    public function getCantEventsAction()
    {
    	return new Response($this->userServices->cantObject("ObjectBundle:Event"));;
    
    }
    
    /**
     * Obtiene la cantidad de comentarios del sistema.
     *
     * @Route("/admin/cant/comments", name="admin_dashboard_cant_comments")
     * @Method("GET")
     * @Template("")
     */
    public function getCantCommentsAction()
    {
    	return new Response($this->userServices->cantObject("ObjectBundle:NewsUser"));
    
    }
    
    
     /**
     * Lists all User entities.
      * 
     * @Route("/admin/all/users", name="admin_all_user")
     * @Method("GET")
     * @Template("UserBundle:UserAdmin:listUsers.html.twig")
     */
    public function getUsersAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ObjectBundle:User')->findAll();

        return array(
            'entities' => $entities,
        );
    }
            
    
    /**
     * Obtiene la cantidad de visitas a la pagina de inicio.
     *
     * @Route("/admin/cant/visit", name="admin_dashboard_cant_visit")
     * @Method("GET")
     * @Template("")
     */
    public function getCantVisitAction()
    {
    	return new Response($this->userServices->cantObject("ObjectBundle:ActivityLogUsers"));
    
    }
    
    
    /**
     * Creates logs user actividad
     *
     * @Route("/logs/activity", name="activity_logs_user")
     * @Method("GET")
     * @Template("")
     */
    public function createLogsUserAction()
    {
    		$entity  = new ActivityLogUsers();
    		$entity->setComment("Acceso a calendario");
    		$entity->setPage("Calendario");
    		$entity->setSection("Inicio");
    		$entity->setDate(date("Y-m-d H:i:s"));
    		$entity->setUser(null);
    		
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($entity);
    		$em->flush();
    
    
    	return new Response();
    }
    
    
    
    //Organization
    
    /**
     * Displays a form to create a new Organizer entity.
     *
     * @Route("/new/organizer", name="organizer_new")
     * @Method("GET")
     * @Template("UserBundle:Organizer:new.html.twig")
     */
    public function newOrganizerAction()
    {
    	$entity = new Organizer();
    	$form   = $this->createForm(new OrganizerType(), $entity);
    
    	return array(
    			'entity' => $entity,
    			'form'   => $form->createView(),
    	);
    }
    
     /**
     * Creates a new User entity.
     *
     * @Route("/organizer/create", name="organizer_create")
     * @Method("POST")
     * @Template("UserBundle:Organizer:new.html.twig")
     */
    public function createOrganizerAction(Request $request)
    {
        $entity  = new Organizer();
        $form = $this->createForm(new OrganizerType(), $entity);
        $form->bind($request);
        $entity->setUser($this->getUser());
        
        	
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
		
    
        return $this->redirect($this->generateUrl('organizer_edit', array('id' => $entity->getId())));
        
        
        return $this->render('UserBundle:Organizer:new.html.twig', array(
        		'entity' => $entity,
        		'form'   => $form->createView(),
        ));
    }
    
    /**
     * Edits an existing User entity.
     *
     * @Route("organizer/{id}/update", name="organizer_update")
     * @Method("POST")
     * @Template("UserBundle:Organizer:edit.html.twig")
     */
    public function updateOrganizerAction(Request $request, $id)
    {
    	$em = $this->getDoctrine()->getManager();
    
    	$entity = $em->getRepository('ObjectBundle:Organizer')->find($id);
    
    	if (!$entity) {
    		throw $this->createNotFoundException('Unable to find User entity.');
    	}
    
    	$deleteForm = $this->createDeleteForm($id);
    	$editForm = $this->createForm(new OrganizerType(), $entity);
    	$editForm->bind($request);
    	$entity->setUser($this->getUser());
    	if ($editForm->isValid()) {
    		$em->persist($entity);
    		$em->flush();
    
    		return $this->redirect($this->generateUrl('organizer_edit', array('id' => $id)));
    	}
    
    	return array(
    			'entity'      => $entity,
    			'form'   => $editForm->createView(),
    			'delete_form' => $deleteForm->createView(),
    	);
    }
    
    /**
     * Displays a form to edit an existing User entity.
     *
     * @Route("/organizer/{id}/edit", name="organizer_edit")
     * @Method("GET")
     * @Template("UserBundle:Organizer:edit.html.twig")
     */
    public function editOrganizerAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
    
    	$entity = $em->getRepository('ObjectBundle:Organizer')->find($id);
    
    	if (!$entity) {
    		throw $this->createNotFoundException('Unable to find User entity.');
    	}
    
    	$editForm = $this->createForm(new OrganizerType(), $entity);
    	$deleteForm = $this->createDeleteForm($id);
    
    	return array(
    			'entity'      => $entity,
    			'form'   => $editForm->createView(),
    			'delete_form' => $deleteForm->createView(),
    	);
    }
    
    /**
     * Displays a form to edit an existing User entity.
     *
     * @Route("/organizer/list", name="organizer_list")
     * @Method("GET")
     * @Template("UserBundle:Organizer:listOrganizer.html.twig")
     */
    public function listOrganizerAction()
    {
    	$entities = $this->userServices->getAllOrganizer();
    	
    	return array(
    			'entities' => $entities
    	);
    }
    
    
    
    
    
    
}
