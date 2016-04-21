<?php

namespace Xtending\ServicesBundle\Services;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Xtending\EntityBundle\Entity\FormulariosResultados;
use Symfony\Component\Validator\Constraints\Length;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\BrowserKit\Response;
use Doctrine\DBAL\Query\QueryBuilder;
use Xtending\EntityBundle\Entity\Contactos;
use Xtending\EntityBundle\Entity\Entidades;
use Xtending\EntityBundle\Entity\AccionCorrectiva;
use Xtending\EntityBundle\Entity\XtendingConstantes;


class MailerServices 
{
	protected $controller;
	
	public function __construct($controller)
	{
		$this->controller = $controller;
	}

	/**
	 * Se configura y prepara el mail para enviar.
	 * 
	 * @param string $asunto
	 * @param email $remitente
	 * @param array $destinatarios
	 * @param string $contenido
	 * @param FormulariosResultados $registro
	 * @return \Symfony\Component\BrowserKit\Response
	 */
    public function enviarEmailAlertas($asunto, $remitente, array $destinatarios, $contenido, FormulariosResultados $registro)
    {
    	
    	$message = \Swift_Message::newInstance()
    	->setSubject($asunto)
    	->setFrom(array('info@xtending.co' => 'Xtending'))
    	->setReplyTo($remitente)
    	->setBcc(array('info.xtending@gmail.com' => 'Xtending'))
    	->setTo ($destinatarios)
    	// 		->setBody($this->controller->renderView('AlertasBundle:Alertas:email.txt.twig')) SIMPLE
    	->setBody(
    			$this->controller->renderView(
    					'AlertasBundle:Alertas:email.txt.twig', array(
    							'registro' => $registro,
    							'contenido' => $contenido)
    			)
    	)
    	;
    	$respuesta = $this->sendMail($message);
//     	$this->controller->get('mailer')->send($message);
    	
//     	return new Response (1);
		return $respuesta;
    	 
    }
    
    /**
     * Prepara y env�a el mail para recuperar la password.
     * @param Contactos $usuario
     * @param string $codigo
     * @return \Symfony\Component\BrowserKit\Response
     */
    public function enviarMailRecuperarPassword (Contactos $usuario, $codigo) {
    	
    	$message = \Swift_Message::newInstance()
    	->setSubject('Recuperar Password')
    	->setFrom(array('info@xtending.co' => 'Xtending'))
    	->setBcc(array('info.xtending@gmail.com' => 'Xtending'))
    	->setTo (array($usuario->getEmail() => $usuario->getNombre().' '.$usuario->getApellido()))
    	->setBody(
    			$this->controller->renderView(
    					'SecurityXtendingBundle:Security:email.txt.twig', array(
    							'usuario' => $usuario,
    							'codigo' => $codigo)
    			)
    	);
    	$respuesta = $this->sendMail($message);
//     	$this->controller->get('mailer')->send($message);

//     	return new Response (1);
		return $respuesta;
    }
    
    /**
     * Prepara y env�a el mail de invitaci�n al nuevo Contacto.
     * @param Contactos $usuario es el usuario de la plataforma que crea la invitaci�n.
     * @param string $tipo la relaci�n que existe entre la empresa que lo creo.
     * @param Contactos $contacto es el contacto que va a ser invitado.
     * @return \Symfony\Component\BrowserKit\Response
     */
    public function enviarMailInvitarContacto (Entidades $empresa,Contactos $contacto, Contactos $usuario, $tipo) {
    	 
    	$message = \Swift_Message::newInstance()
    	->setSubject('Xtending Bienvenido')
    	->setFrom(array($usuario->getEmail() => $usuario->getNombre().' '.$usuario->getApellido()))
    	->setReplyTo($usuario->getEmail())
    	->setBcc(array('info.xtending@gmail.com' => 'Xtending'))
    	->setTo (array($contacto->getEmail() => $contacto->getNombre().' '.$contacto->getApellido()))
    	->setBody(
    			$this->controller->renderView(
    					'EntidadesBundle:Atajos:emailContacto.txt.twig', array(
    							'usuario' => $usuario,
    							'tipoRelacion' => $tipo,
    							'contacto' => $contacto)
    			)
    	);
    	$respuesta = $this->sendMail($message);
    	
    	return $respuesta;
    }
    
    /**
     * Prepara y env�a el mail de invitaci�n a la nueva Empresa.
     * La variable tipo indica la relaci�n generada.
     * @param Entidades $empresa
     * @param Contactos $usuario
     * @param string $tipo
     * @return \Symfony\Component\BrowserKit\Response
     */
    public function enviarMailInvitarEmpresa (Entidades $empresa, Contactos $usuario, $tipo) {
    
    	$message = \Swift_Message::newInstance()
    	->setSubject('Xtending Bienvenido')
    	->setFrom(array($usuario->getEmail() => $usuario->getNombre().' '.$usuario->getApellido()))
    	->setReplyTo($usuario->getEmail())
    	->setBcc(array('info.xtending@gmail.com' => 'Xtending'))
    	->setTo (array($empresa->getEmail() => $empresa->getNombre()))
    	->setBody(
    			$this->controller->renderView(
    					'EntidadesBundle:Atajos:emailEmpresa.txt.twig', array(
    							'usuario' => $usuario,
    							'empresa' => $empresa,
    							'tipoRelacion' => $tipo)
    			)
    	);
    	$respuesta = $this->sendMail($message);
    	 
    	return $respuesta;
    }

    public function sendMail ($message) {
    	try {
    		$this->controller->get('mailer')->send($message);
    		$respuesta = 1;
    	} catch (Exception $e) {
    		$respuesta = 0;
    	}
    	return $respuesta;
    }
    
    /**
     * Se configura y prepara el mail para enviar de IRAM.
     *
     * @param string $asunto
     * @param email $remitente
     * @param array $destinatarios
     * @param string $contenido
     * @param AccionCorrectiva $ac
     * @return \Symfony\Component\BrowserKit\Response
     */
    public function solicitarAprobacionEmailIRAM($asunto, $remitente, $destinatarios, $contenido, AccionCorrectiva $ac)
    {
    	 
    	$message = \Swift_Message::newInstance()
    	->setSubject($asunto)
    	->setFrom(array('info@x-tending.net' => 'Xtending'))
    	->setReplyTo($remitente)
    	->setTo ($destinatarios->toArray())
    	->setBcc($this->getMailsBccIRAM())
    	->setBody(
    			$this->controller->renderView(
    					'PacsBundle:EmailsIRAM:solicitudAprobacion.html.twig', array(
    							'ac' => $ac,
    							'contenido' => $contenido,
    					)
    			)
    	)
    	;
    	$message->setContentType("text/html");
    	$respuesta = $this->sendMail($message);
    	return $respuesta;
    
    }
    
    public function informarEmailPorItemsIRAM($asunto, $remitente, $destinatarios, $contenido,AccionCorrectiva $ac, $items)
    {
    	$message = \Swift_Message::newInstance()
    	->setSubject($asunto)
    	->setFrom(array('info@x-tending.net' => 'Xtending'))
    	->setReplyTo($remitente)
    	->setTo ($destinatarios->toArray())
    	->setBcc($this->getMailsBccIRAM())
    	->setBody(
    			$this->controller->renderView(
    					'PacsBundle:EmailsIRAM:emailPorItems.html.twig', array(
    							'ac' => $ac,
    							'items' => $items,
    							'contenido' => $contenido,
    					)
    			)
    	)
    	;
    	$message->setContentType("text/html");
    	$respuesta = $this->sendMail($message);
    	return $respuesta;
    }
    
    private function getMailsBccIRAM()
    {
    	$mails = new ArrayCollection();
    	$mails->add('Pablo.Bertolini@ar.mcd.com');
    	$mails->add('marcela.barreto@ar.mcd.com');
    	$mails->add('info.xtending@gmail.com');
    	return $mails->toArray();
    }
    
    public function enviarMailContactoLanding ($nombre, $email, $telefono, $mensaje) {
    
    	$message = \Swift_Message::newInstance()
    	->setSubject('Contacto Landing Page')
    	->setFrom(array('info.xtending@gmail.com' => 'Xtending'))
    	->setTo (array('info@xtending.co' => 'Xtending'))
    	->setBody(
    			$this->controller->renderView(
    					'SecurityXtendingBundle:Security:emailContactoLanding.txt.twig', array(
    							'nombre' => $nombre,
    							'email' => $email,
    							'telefono' => $telefono,
    							'mensaje' => $mensaje
    					)
    			)
    	);
    	$respuesta = $this->sendMail($message);
    
    	return $respuesta;
    }
    
    public function pedirActualizacionEntidad(Contactos $usuario,$entidad,$asunto,$responsables)
    {
    	//TODO falta agregar el envío al bcc 20150202
    	
    	$message = \Swift_Message::newInstance()
    	->setSubject($asunto)
    	->setFrom($usuario->getEntidad()->getEmail())
    	->setTo ($entidad->getEmail())
    	->setBody(
    			$this->controller->renderView(
    					'EntidadesBundle:Mails:emailActualizar.txt.twig', array(
    							'usuario' => $usuario,
    							'empresa' => $entidad
    					)
    			)
    	);
    	$respuesta = $this->sendMail($message);
    	
    	return $respuesta;
    }
    
    public function enviarEmailEventos($template, $entities)
    {
    
    	$message = \Swift_Message::newInstance()
    	->setSubject("Eventos TriaBox")
    	->setFrom(array('triatleta.amateur@gmail.com' => 'triabox'))
    	->setReplyTo('triatleta.amateur@gmail.com')
    	->setTo ('pereyrajonatan@gmail.com')
   
    	->setBody(
    			$this->controller->renderView(
    					$template, array(
    						'entities' => $entities,
    			'tipe' => "all"
    					)
    			)
    	)
    	;
    	$message->setContentType("text/html");
    	$respuesta = $this->sendMail($message);
    	return $respuesta;
    
    }
   
}
