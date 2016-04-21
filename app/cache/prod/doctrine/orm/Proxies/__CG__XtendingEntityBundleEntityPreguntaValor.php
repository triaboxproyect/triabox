<?php

namespace Proxies\__CG__\Xtending\EntityBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class PreguntaValor extends \Xtending\EntityBundle\Entity\PreguntaValor implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setTextarea($textarea)
    {
        $this->__load();
        return parent::setTextarea($textarea);
    }

    public function getTextarea()
    {
        $this->__load();
        return parent::getTextarea();
    }

    public function setCriterioSeleccion($criterio)
    {
        $this->__load();
        return parent::setCriterioSeleccion($criterio);
    }

    public function getCriterioSeleccion()
    {
        $this->__load();
        return parent::getCriterioSeleccion();
    }

    public function setText($text)
    {
        $this->__load();
        return parent::setText($text);
    }

    public function getText()
    {
        $this->__load();
        return parent::getText();
    }

    public function setArchivo($archivo)
    {
        $this->__load();
        return parent::setArchivo($archivo);
    }

    public function getArchivo()
    {
        $this->__load();
        return parent::getArchivo();
    }

    public function setFecha($fecha)
    {
        $this->__load();
        return parent::setFecha($fecha);
    }

    public function getfecha()
    {
        $this->__load();
        return parent::getfecha();
    }

    public function setPregunta(\Xtending\EntityBundle\Entity\Preguntas $pregunta)
    {
        $this->__load();
        return parent::setPregunta($pregunta);
    }

    public function getPregunta()
    {
        $this->__load();
        return parent::getPregunta();
    }

    public function setFormulariosResultados(\Xtending\EntityBundle\Entity\FormulariosResultados $formulariosResultados = NULL)
    {
        $this->__load();
        return parent::setFormulariosResultados($formulariosResultados);
    }

    public function addFormulariosResultados(\Xtending\EntityBundle\Entity\FormulariosResultados $formulariosResultados = NULL)
    {
        $this->__load();
        return parent::addFormulariosResultados($formulariosResultados);
    }

    public function getFormulariosResultados()
    {
        $this->__load();
        return parent::getFormulariosResultados();
    }

    public function getPosicionRegistro()
    {
        $this->__load();
        return parent::getPosicionRegistro();
    }

    public function getFile()
    {
        $this->__load();
        return parent::getFile();
    }

    public function getAbsolutePath()
    {
        $this->__load();
        return parent::getAbsolutePath();
    }

    public function getWebPath()
    {
        $this->__load();
        return parent::getWebPath();
    }

    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {
        $this->__load();
        return parent::setFile($file);
    }

    public function upload()
    {
        $this->__load();
        return parent::upload();
    }

    public function removeUpload()
    {
        $this->__load();
        return parent::removeUpload();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'textarea', 'fecha', 'text', 'archivo', 'pregunta', 'criterioSeleccion', 'formulariosResultados');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}