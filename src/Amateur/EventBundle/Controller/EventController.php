<?php

namespace Amateur\EventBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Amateur\ObjectBundle\Entity\Event;
use Amateur\EventBundle\Form\EventType;
use Xtending\ServicesBundle\Services\ExcelServices;

use Doctrine\Common\Collections\ArrayCollection;
use Amateur\ObjectBundle\Entity\Enrolled;
use Amateur\ObjectBundle\Entity\Punctuation;
use Amateur\EventBundle\Form\PunctuationType;
use Amateur\EventBundle\Services\EventServices;
use Amateur\EventBundle\Form\EnrolledType;
use Symfony\Component\HttpFoundation\Response;
use Amateur\ObjectBundle\Entity\User;
use Amateur\ObjectBundle\Entity\EventPath;
use Amateur\UserBundle\Form\UserType;
use Xtending\ServicesBundle\Services\MailerServices;
use Amateur\ObjectBundle\Entity\Amateur\ObjectBundle\Entity;
use Symfony\Component\HttpFoundation\JsonResponse;
use Amateur\ObjectBundle\Entity\Classification;




/**
 * EventController
 * 
 * 
 * 
 * @author jonatan
 *
 */
class EventController extends Controller
{
	
	
	/**
	 * @var EventServices : Contiene todas las funcionalidades de los Eventos.
	 */
	protected $eventServices;
	
	/**
	 * @var ExcelServices : Contiene todas las funcionalidades para exportar a Excel.
	 */
	protected $excelServices;
	
	/**
	 * @var EmailServices : Envia email
	 */
	protected $emailServices;
	
	public function __construct()
	{
		$this->eventServices = new EventServices($this);
		$this->excelServices = new ExcelServices($this);
		$this->emailServices = new MailerServices($this);
		
	}
   
    /**
     * Lista todos todos los eventos del sistema.
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

//         $entities = $em->getRepository('ObjectBundle:Event')->findAll();
        $qb = $em->createQueryBuilder();
        $entities =  $qb->select("e")
        ->add('from', 'ObjectBundle:Event e')
        ->andWhere('e.isActive = :active')
        ->setParameter('active', 0)
      	 ->orderBy('e.startTime', 'DESC')->getQuery ()
        ->execute();
        

        return $this->render('EventBundle:Event:index.html.twig', array(
            'entities' => $entities,
        	'firstResult' => 0,
        	'tipe' => "all"
        ));
    }

    
    /**
     * Finds and displays a Event entity.
     *
     */
    public function onlineEventUserAction($name,$id)
    {	
    	$em = $this->getDoctrine()->getManager();
    
    	$entity = $em->getRepository('ObjectBundle:Event')->find($id);
    
    	$entities = $this->eventServices->getPointsEvent($id,$name);
    	 
    	return $this->render('EventBundle:EventOnline:onlineShow.html.twig', array(
    			'entities' => $entities,
    			'entity'   => $entity,
    			'name' => $name,
    			'idEvent' => $id,
    	));
    	
    	
//     	return $this->render('EventBundle:Event:online_information_event.html.twig', array(
//     			'entity'      => $entity,
//     			'name'        => $name
//     	));
    }
    
    /**
     * Lista todos todos los eventos del sistema.
     */
    public function calendarAction()
    {
    	$em = $this->getDoctrine()->getManager();
    
    	//         $entities = $em->getRepository('ObjectBundle:Event')->findAll();
    	$qb = $em->createQueryBuilder();
    	$entities =  $qb->select("e")
    	->add('from', 'ObjectBundle:Event e')
    	->orderBy('e.startTime', 'DESC')->getQuery ()
    	->execute();
    
    
    	return $this->render('EventBundle:Event:calendar.html.twig', array(
    			'entities' => $entities,
    			'tipe' => "all"
    	));
    }
    
    
    /**
     * Lista los proximos eventos a ocurrir para ajax
     *
     */
    public function nextEventAllAjaxAction($firstResult,$maxResults)
    {
    	
    	$paginator = array();
    	$paginator['firstResult'] = $firstResult;
    	$paginator['maxResults'] = $maxResults;
    	$entities = $this->eventServices->nextEvent($paginator);
    
    	return $this->render('EventBundle:Event:listEvent.html.twig', array(
    			'entities' => $entities,
    			'firstResult' => $firstResult+$maxResults,
    			'tipe' => "next_all"
    	));
    }
    
    /**
     * Lista los proximos eventos a ocurrir para ajax
     *
     */
    public function nextEventAllRssAction($firstResult,$maxResults)
    {
    	 
    	$paginator = array();
    	$paginator['firstResult'] = $firstResult;
    	$paginator['maxResults'] = $maxResults;
    	$entities = $this->eventServices->nextEvent($paginator);
    
    	return $this->render('EventBundle:Event:listEvent.xml.twig', array(
    			'entities' => $entities,
    	));
    }
    
    /**
     * Lista los ultimos eventos que se cargaron los resultados
     *
     */
    public function lastResultEventAction($firstResult,$maxResults)
    {
    	 
    	$paginator = array();
    	$paginator['firstResult'] = $firstResult;
    	$paginator['maxResults'] = $maxResults;
    	$entities = $this->eventServices->lastResultEvent($paginator);
    
    	return $this->render('EventBundle:Result:last_result.html.twig', array(
    			'entities' => $entities,
    			'firstResult' => $firstResult+$maxResults,
    			'tipe' => "next_all"
    	));
    }
    
    
    
    /**
     * llama a la pagina que muestra la pagina de los  los eventos sin resultados
     *
     */
    public function listEventWithOutResultEventAction()
    {
        
    	return $this->render('EventBundle:Result:event_without_result.html.twig');
    }
    
    /**
     * Lista los ultimos eventos que no se cargaron los eventos
     *
     */
    public function lastEventWithOutResultEventAction($firstResult,$maxResults)
    {
    
    	$paginator = array();
    	$paginator['firstResult'] = $firstResult;
    	$paginator['maxResults'] = $maxResults;
    	$entities = $this->eventServices->lastEventWithOutResultEvent($paginator);
    
    	return $this->render('EventBundle:Help:listEventWithAjax.html.twig', array(
    			'entities' => $entities,
    			'firstResult' => $firstResult+$maxResults,
    			'tipe' => "show",
    			'action' => "event_without_result"
    	));
    }
    
    /**
     * Lista los proximos eventos a ocurrir minimo
     *
     */
    public function nextEventReduceAction($firstResult,$maxResults)
    {
    	 
    	$paginator = array();
    	$paginator['firstResult'] = $firstResult;
    	$paginator['maxResults'] = $maxResults;
    	$entities = $this->eventServices->nextEvent($paginator);
    
    	return $this->render('EventBundle:Event:listEventPublic.html.twig', array(
    			'entities' => $entities,
    			'firstResult' => $firstResult+$maxResults,
    			'tipe' => "next_all"
    	));
    }
    
    /**
     * Lista los proximos eventos a ocurrir minimo por eventos
     *
     */
    public function nextEventBySportReduceAction($idSport,$firstResult,$maxResults)
    {
    
    	$paginator = array();
    	$paginator['firstResult'] = $firstResult;
    	$paginator['maxResults'] = $maxResults;
    	$entities = $this->eventServices->getEventNextBySport($idSport,$paginator);
    
    	return $this->render('EventBundle:Event:listEventPublic.html.twig', array(
    			'entities' => $entities,
    			'firstResult' => $firstResult+$maxResults,
    			'tipe' => "next_all",
    			'idSport'=> $idSport
    	));
    }
    
    /**
     * Obtener eventos del dia.
     */
    public function getToDayEventsAction(){
    
    	$entities = $this->eventServices->getToDayEvents();
    	
    	return $this->render('EventBundle:Event:listEventPublic.html.twig', array(
    			'entities' => $entities,
    			'firstResult' => 0,
    			'tipe' => "run",
    			'idSport' => 0
    	));
    	
    }
    
    /**
     * Lista los proximos eventos a ocurrir minimo por eventos
     *
     */
    public function searchEventReduceAction(Request $request)
    {
    
    	
    	$search = $request->get("search");
    	 
    	$events = $this->eventServices->seachEvent($search);
    	
    	
    	return $this->render('EventBundle:Event:searchEventPublic.html.twig', array(
    			'entities' => $events,
    			'firstResult' => 1,
    			'tipe' => "nono",
    			'idSport'=> 10
    	));
    }
    /**
     * 
     * Lista los proximos eventos a ocurrir
     *
     */
    public function listNexEventAction()
    {

    	return $this->render('EventBundle:Event:listNextEvent.html.twig', array(
    			'tipe' => "next_all"
    	));
    }
    
    /**
     * Lista los eventos que se inscribio el usuario y que ya ocurrieron.
     *
     */
    public function listEventPastAction()
    {
		
    	return $this->render('UserBundle:UserResult:listResultUser.html.twig', array(
    			'user' => $this->getUser(),
    	));
    }
    
    /**
     * Lista los eventos que se inscribio el usuario y que ya ocurrieron.
     *
     */
    public function listEventPastAjaxAction($firstResult,$maxResults)
    {
    
    	$paginator = array();
    	$paginator['firstResult'] = $firstResult;
    	$paginator['maxResults'] = $maxResults;
    	$events = new ArrayCollection();
    
    	$events = $this->eventServices->getEventEnrolledUserPast($this->getUser(),$paginator);
    
    	return $this->render('EventBundle:Event:listEvent.html.twig', array(
    			'entities' => $events,
    			'firstResult' => $firstResult+$maxResults,
    			'tipe' => "past"
    	));
    }
    
    /**
     * Lists all Event que se inscribio el usuario y que ya ocurrieron
     *
     */
    public function listEventNextAction()
    {
    
    	return $this->render('EventBundle:Event:index.html.twig', array(
    			'tipe' => "next",
    	));
    }
    
    /**
     * Lists all Event que se inscribio el usuario y que ya ocurrieron
     *
     */
    public function listEventNextAjaxAction($firstResult , $maxResults)
    {
    	$paginator = array();
    	$paginator['firstResult'] = $firstResult;
    	$paginator['maxResults'] = $maxResults;
		$events = new ArrayCollection();
		
		$events = $this->eventServices->getEventEnrolledUserNext($this->getUser(),$paginator);
    
    
    	return $this->render('EventBundle:Event:listEvent.html.twig', array(
    			'entities' => $events,
    			'firstResult' => $firstResult+$maxResults,
    			'tipe' => "next",
    	));
    }
    /**
     * Creates a new Event entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Event();
        $form = $this->createForm(new EventType(), $entity);
        $form->bind($request);
		
       
        if ($form->isValid()) {
        	
        	//Si el usuario es organizador se agrega el organizador al evento.
           	if($this->getUser()->getOrganizer() != null && $this->getUser()->getOrganizer()->getIsActive() == 1){
           		$entity->setOrganizer($this->getUser()->getOrganizer());
           	}
        	
        	$entity = $this->eventServices->createEvent($entity);

            return $this->redirect($this->generateUrl('event_show', array('id' => $entity->getId())));
        }

        return $this->render('EventBundle:Event:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
   
    /**
     * Crear un punto geolozalizado de un un usuario participando en un evento.
     * 
     * @param interger $latitude
     * @param interger $longitude
     * @param timestamp $time
     * @param User $user ID identificador del usuario
     * @param int $idEvent ID Event
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createEventPointAction($latitude, $longitude, $time,$user,$idEvent)
    {
    	
    	$em = $this->getDoctrine()->getManager();
    	$entities = $em->getRepository('ObjectBundle:Event')->find($idEvent);
    	
    	$entity  = new EventPath();
    	$entity->setLatitude($latitude);
    	$entity->setLongitude($longitude);
    	$entity->setTime($time);
    	$entity->setEvent($entities);
    	$entity->setIdPath($user);
    
    	
    	$em->persist($entity);
    	$em->flush();
    	return new Response();
    }
    
    /**
     * Redirecciona a la pagina para agregar el identificador del usuario en un evento para un seguimiento Online
     * 
     * @param int $idEvent ID evento
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function generateIdOnlineAction($idEvent){
    	
    	
    	return $this->render('EventBundle:Event:eventOnlineGenerateId.html.twig', array(
    			'idEvent' =>  $idEvent,
    	));
    	
    }
    
   
    /**
     * Muestra la pagina de seguimiento online con los datos del mapa
     * 
     * @param string $name Identificador del usuario en la carrera
     * @param int $idEvent ID evento
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showEventMapAction($name,$idEvent)
    {
    	
    	$entities = $this->eventServices->getPointsEvent($idEvent,$name);
    	$em = $this->getDoctrine()->getManager();
    	$entity = $em->getRepository('ObjectBundle:Event')->find($idEvent);
    	
    	return $this->render('EventBundle:EventOnline:onlineTrackingWeb.html.twig', array(
    			'entities' => $entities,
    			'name' => $name,
    			'entity' => $entity,
    			'idEvent' => $idEvent,
    	));
    }
   
    /**
     * 
     *  Calculo los intervalos cada un kilometro de un usuario que participo o esta participando en un evento
     * 
     * @param string $name Identificador del usuario en la carrera
     * @param int $idEvent ID evento
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getIntervalEventOnlineAction($name,$idEvent)
    {
    	 
    	$entities = $this->eventServices->getPointsEvent($idEvent,$name);
    	
    	$statistics =  $this->eventServices->calculateStatisticsForPathEvent($entities);
    	
    	return $this->render('EventBundle:EventOnline:interval.html.twig', array(
    			'statistics' => $statistics,
    			
    	));
    }
    
    /**
     * Devuelve las estadisticas del evento online segun el nombre del usuario y del id del evento
     * 
     * @param string $name Identificador del usuario en la carrera
     * @param int $idEvent ID evento
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getEstadisticasEventOnlineAction($name,$idEvent)
    {
    	 
    	$entities = $this->eventServices->getPointsEvent($idEvent,$name);
    
    	$distancia =  $this->eventServices->calculateDistanceForPathEvent($entities);
    	
    	if(!empty($entities)){
    	$time = $this->eventServices->calculateTimeMinuteBetweeDate(strtotime($entities[0]->getTime()), strtotime(end($entities)->getTime()));
    	$promedio = gmdate("i:s",$time/$distancia);
    	}else{$time = 0; $promedio = 0;}
    	
    	
    	return $this->render('EventBundle:EventOnline:distance.html.twig', array(
    			'distancia' => round($distancia,2),
    			'time' => gmdate("H:i:s", $time),
    			'promedio' => $promedio
    	));
    }
    
    
	/**
	 * Devuelve el ultimo punto de un recorrido
	 * 
	 * @param string $name Identificador del usuario en la carrera
     * @param int $idEvent ID evento
     * @return \Symfony\Component\HttpFoundation\JsonResponse
	 */
	public function getLastPointEventAction($idEvent,$name){
		
		$entity = $this->eventServices->getLastPointEvent($idEvent, $name);
		
		return new JsonResponse([
				'success' => true,
				'long'    => $entity->getLongitude(),
				'lant' => $entity->getLatitude(),
		]);
	}
	
    
    /**
     * Creates a new Punctuation for Event entity.
     *
     */
    public function createPunctuationAction(Request $request,$idEvent)
    {
    	$entity  = new Punctuation();
    	$form = $this->createForm(new PunctuationType(), $entity);
    	$form->bind($request);
    
    	$this->eventServices->createPunctuation($entity,$idEvent);
 
    	return $this->redirect($this->generateUrl('event_show', array('id' => $idEvent)));
    	
    }

    /**
     * Displays a form to create a new Event entity.
     *
     */
    public function newAction()
    {
        $entity = new Event();
        $form   = $this->createForm(new EventType(), $entity);

        return $this->render('EventBundle:Event:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Event entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('ObjectBundle:Event')->find($id);
        
        $deleteForm = $this->createDeleteForm($id);
 
        
        $punctuation = new Punctuation();
		
        $punctuationForm  = $this->createForm(new PunctuationType(), $punctuation);
        
        $friends = new ArrayCollection();
        
        if($this->getUser() != null){
        	$friends =$this->eventServices->getFriendFromEventByUser($entity, $this->getUser());
        }
        return $this->render('EventBundle:Event:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        	'form' => $punctuationForm->createView(),
        	'tipe' => "show",
        	'friends' => $friends,
        ));
    }

    /**
     * Displays a form to edit an existing Event entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObjectBundle:Event')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Event entity.');
        }

        $editForm = $this->createForm(new EventType(), $entity);
        $deleteForm = $this->createDeleteForm($id);
		
        
        return $this->render('EventBundle:Event:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Displays a form to edit an existing Event entity.
     *
     */
    public function newEnrolledAction($idEvent)
    {
    	$em = $this->getDoctrine()->getManager();
    	$event = $em->getRepository('ObjectBundle:Event')->find($idEvent);
    	$entity = new Enrolled();
    	
    	$form   = $this->createForm(new EnrolledType($event), $entity);
    
    	return $this->render('EventBundle:Event:newEnrolled.html.twig', array(
    			'entity'      => $entity,
    			'event' =>  $event,
    			'form'   => $form->createView(),
    	));
    }
    
    /**
     * Displays a form to edit an existing Event entity.
     *
     */
    public function editEnrolledAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
    
    	$entity = $em->getRepository('ObjectBundle:Enrolled')->find($id);
    
    	$editForm = $this->createForm(new EnrolledType($entity->getEvent()), $entity);
    	//$deleteForm = $this->createDeleteForm($id);
    
    	return $this->render('EventBundle:Event:editEnrolled.html.twig', array(
    			'entity'      => $entity,
    			'form'   => $editForm->createView(),
    	));
    }
    
    /**
     * Edits an existing Event entity.
     *
     */
    public function updateEnrolledAction(Request $request, $id)
    {
    	$em = $this->getDoctrine()->getManager();
    
    	$entity = $em->getRepository('ObjectBundle:Enrolled')->find($id);
    
    	$editForm = $this->createForm(new EnrolledType($entity->getEvent()), $entity);
    	$editForm->bind($request);
    
    	
    		$em->persist($entity);
    		$em->flush();
    	
    
    	return $this->redirect($this->generateUrl('event_past'));
    }

    /**
     * Edits an existing Event entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObjectBundle:Event')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Event entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EventType(), $entity);
        $editForm->bind($request);
        
        
        $result = $this->excelServices->importExcelResult($entity,$entity->getLabelLink());
        $entity->setClassifications($result);
        $this->excelServices->removeFile($entity->getLabelLink());
        $entity->setLabelLink("");
        
        $entity->setStartTime(date("Y-m-d", strtotime($entity->getStartTime())));
        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
            
            

            return $this->redirect($this->generateUrl('event_show', array('id' => $id)));
        }
        
        return $this->render('EventBundle:Event:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Event entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ObjectBundle:Event')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Event entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('event'));
    }

    /**
     * Creates a form to delete a Event entity by id.
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
    
    
   
    
    public function asigneResultEventAction($idClassification,$idEvent){
    	
    	$this->eventServices->asigneResultEvent($idClassification, $idEvent, $this->getUser());
    	
    	return $this->redirect($this->generateUrl('event_show', array('id' => $idEvent)));
    	
    }
    
    public function searchResultAction(){
    	
    	$classifications = $this->eventServices->searchResult($this->getUser());
    	
    	return $this->render('EventBundle:Event:seachResult.html.twig', array(
    			'classifications' => $classifications,
    	));
    	
    }
    
    public function notificationResultAction(){
    	 
    	$classifications = $this->eventServices->searchResult($this->getUser());
    	 
    	return $this->render('EventBundle:Result:result_notification.html.twig', array(
    			'classifications' => $classifications,
    	));
    	 
    }
    
    /**
     * Obtiene las classificaciones de un evento paginados
     * 
     * @param  $firstResult primer registro
     * @param  $maxResults maxima cantidad de  
     * @param  $idEvent id evento
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getClassificationByIdEventAction($tipe,$firstResult,$maxResults,$idEvent){
    	
    	$classifications = $this->eventServices->getClassificationByIdEventEvent($firstResult,$maxResults,$idEvent);
    	
    	if($tipe == 'next'){
    		$firstResultPre = $firstResult-$maxResults;
    		$firstResult = $firstResult+$maxResults;
    	}else {
    		
    		$firstResultPre = $firstResult-$maxResults;
    		$firstResult = $firstResult+$maxResults;
    		
    	}
    	
    	
    	
    	return $this->render('EventBundle:Event:listClassification.html.twig', array(
    			'classifications' => $classifications,
    			'idEvent' => $idEvent,
    			'firstResult' => $firstResult,
    			'firstResultPre' => $firstResultPre,
    	));
    	
    }
    
    /**
     * Redirige a la una pagina de administracion de resultados de un evento
     *
     */
    public function adminResultAction($id)
    {
    
    	$em = $this->getDoctrine()->getManager();
    
    	$entity = $em->getRepository('ObjectBundle:Event')->find($id);
    	$editForm = $this->createForm(new EventType(), $entity);
    	
    	
    
    	return $this->render('EventBundle:Result:adminResult.html.twig', array(
    			'entity'      => $entity,
    			'configuration' => null,
    			'form'   => $editForm->createView(),
    
    	));
    }
    
    /**
     * Muestra la vista previa de la configuracion de carga de los resultados y carga los resultados en el evento.
     *
     */
    public function preViewResultAction(Request $request,$id)
    {

    	$em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObjectBundle:Event')->find($id);
        $editForm = $this->createForm(new EventType(), $entity);
        $editForm->bind($request);
        
        $configuration = $this->getConfigurationExcel($request);
        $result = $this->excelServices->importExcelResultWithConfiguration($entity,$entity->getLabelLink(),$configuration);
        $entity->setClassifications($result);
        
        $this->excelServices->removeFile($entity->getLabelLink());
        
        
        if($request->request->get('action') != 'view'){
        	
        	$entity = $em->getRepository('ObjectBundle:Event')->find($id);
        	$entity->setLabelLink("");
        	$em->persist($entity);
        	$em->flush();
        	
        	return $this->redirect($this->generateUrl('event_show', array('id' => $id)));	
        }
    	
    
    	return $this->render('EventBundle:Result:adminResult.html.twig', array(
    			'entity'      => $entity,
    			'configuration' => $configuration,
    			'form'   => $editForm->createView(),

    	));
    }
    
    /**
     * Obtiene la configuracion de lectura del excel cargado.
     * 
     * @param Request $request
     * @return multitype:\Symfony\Component\HttpFoundation\mixed 
     */
    private function getConfigurationExcel(Request $request){
    	
    	$key = "position_";
    	
	    $configuration = array();
	    for ($i = 1; $i <= 14; $i++) {
	    	$configuration[$i] = $request->request->get($key.$i);
	    }
	    
	    return $configuration;
    	
    }
    
    public function enviarEmailEventoAction()
    {
    	$em = $this->getDoctrine()->getManager();
    
    	//$entities = $em->getRepository('ObjectBundle:Event')->findAll();
    	$qb = $em->createQueryBuilder();
    	$entities =  $qb->select("e")
    	->add('from', 'ObjectBundle:Event e')
    	->orderBy('e.startTime', 'DESC')->getQuery ()
    	->execute();
    
    	$this->emailServices->enviarEmailEventos('EventBundle:Event:calendar.html.twig', $entities);
    	
    
    	return new Response();
    }
    
    /**
     * Obtiene los eventos cercanos al usuario logueado.
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function eventAroundMyAction(){
    	
    	$paginator = array();
    	$paginator['firstResult'] = 0;
    	$paginator['maxResults'] = 30;
    	
    	$tipe = "all";
    	$entities = new ArrayCollection();
    	
    	if($this->getUser()->getLongitude() == ''){
    		$tipe = "NOT_DIRECCION";
    	}else{
    		$entities = $this->eventServices->getEventAroundMy($this->getUser(),$paginator);
    	}

    	
 
    	return $this->render('EventBundle:Event:index.html.twig', array(
    			'entities' => $entities,
    			'firstResult' => 0,
    			'tipe' => $tipe
    	));
    }

    /**
     * Lista los proximos eventos a ocurrir para ajax
     *
     */
    public function listEventByOrganizerAction($firstResult,$maxResults,$organizer)
    {
    	 
    	$paginator = array();
    	$paginator['firstResult'] = $firstResult;
    	$paginator['maxResults'] = $maxResults;
    	$entities = $this->eventServices->listEventByOrganizer($paginator,$organizer);
    	
    	//Maneja la paginacion de la pagina
    	$url_more = $this->generateUrl('event_by_organizer',array('firstResult' => $firstResult+$maxResults,
    					'maxResults' => $maxResults,'organizer' => $organizer)); 
    	
    	//URL que permite recargar la pagina.
    	$url_reload = $this->generateUrl('event_by_organizer',array('firstResult' => 0,
    			'maxResults' => $maxResults,'organizer' => $organizer));
    	
    	//Si es la primera vez o se recarga se carga la pagina completa con header
    	$page = 'EventBundle:Event:listEventBigComplete.html.twig';
   		
    	//Si no es la primera vez no se carga el header nuevamente
    	if($firstResult != '0'){$page = 'EventBundle:Event:listEventBig.html.twig';}
   		
    
    	return $this->render($page, array(
    			'entities' => $entities,
    			'firstResult' => $firstResult+$maxResults,
    			'title' => 'Eventos Organizados',
    			'url_more' => $url_more,
    			'url_reload' => $url_reload,
    			'tipe' => "next_all"
    	));
    }
    
    

    public function showClassificationAction($idClassification)
    {
    
    	$em = $this->getDoctrine()->getManager();
    	 
    	$classification = $em->getRepository('ObjectBundle:Classification')->find($idClassification);
    	$user = new User();
    	
    	$user->setName($classification->getName());
    	$user->setLastname($classification->getLastname());
    	
    	//Maneja la paginacion de la pagina
    	$url = $this->generateUrl('event_show_classification',array('idClassification' => $classification->getId()));
    	 
   
    	 

    	return $this->render('UserBundle:UserResult:showEnrolled.html.twig', array(
    			'enrolled' => null,
    			'user'   => $user,
    			'classification' => $classification,
    			'event' => $classification->getEvent(),
    			'url'  => $url,
    	));
    }
//     public function testAutoCompleteAction(){
//      $em = $this->getDoctrine()->getManager();
//      $classifications =   $em->getRepository('ObjectBundle:User')->findAll();
//     	$classifications = new ArrayCollection();
//     	$user = new User("jonatan");
//     	$user->setName("JOnatan");
//     	$user->setEmail("jonatan@algo.com");
    	
//     	$user2 = new User("jonatan");
//     	$user2->setName("JOnatan");
//     	$user2->setEmail("jonatan@algo.com");
//     	$classifications->add($user);
//     	$classifications->add($user2);
    	
//     	$serializer = $this->get('serializer');
//     	$logger = $this->get('logger');
    	
    	
//     	$json = $serializer->serialize(
//     			$classifications,
//     			'json');
//     	$logger->info('JSON '.$json);
//     	$response = new Response($json);
//     	$response->headers->set('Content-Type', 'application/json');
    	
//     	return $response;
//     }


   
    
    
    public function searchResultByNameAndBibAction($search,$idEvent){

    $classifications = $this->eventServices->searchResultByNameAndBib($search, $idEvent);
    	
    
    return $this->render('EventBundle:Event:listClassification.html.twig', array(
    		'classifications' => $classifications,
    		'idEvent' => $idEvent,
    		'firstResult' => 0,
    		'firstResultPre' => 1000,
    ));
      }
    
}
