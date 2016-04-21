<?php

namespace Amateur\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EnrolledType extends AbstractType
{
	
	protected $event;
	
	public function __construct($event)
	{
		$this->event = $event;
		
	}
	
	
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('number')
            ->add('code')	
            ->add('time') 
            ->add('objetive')
            ->add('seconds')
            ->add('user', 'entity', array(
            		'label' => 'user',
            		'class' => 'ObjectBundle:User',
            		'property' => 'id',))
            ->add('classification', 'entity', array(
            		'label' => 'classification',
            		'class' => 'ObjectBundle:Classification',
            		'property' => 'id',))
            ->add('event', 'entity', array(
            		'label' => 'event',
            		'class' => 'ObjectBundle:Event',
            		'property' => 'id',))
            ->add('category', 'entity', array(
            				'label' => 'category',
            				'class' => 'ObjectBundle:Category',
            				'choices' => $this->event->getCategories(),
		            		'attr' => array(
		            				'style'=>"width:400px"
		            		),
            				'property' => 'name',))
            
            
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Amateur\ObjectBundle\Entity\Enrolled'
        ));
    }

    public function getName()
    {
        return 'amateur_objectbundle_enrolledType';
    }
}
