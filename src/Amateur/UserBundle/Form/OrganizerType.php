<?php

namespace Amateur\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrganizerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('isActive')
            ->add('address')
            ->add('web')
            ->add('twitter')
            ->add('facebook')
            ->add('logo')
            ->add('email')
            ->add('phone')
            ->add('description')
            ->add('latitude')
            ->add('longitude')
            ->add('file', 'file', array(
            		'label' => 'archivo',
            		'required' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Amateur\ObjectBundle\Entity\Organizer'
        ));
    }

    public function getName()
    {
        return 'amateur_objectbundle_organizertype';
    }
}
