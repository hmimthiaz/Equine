<?php

namespace Goldcrab\Delma\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserFilterType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('q','text',array(
            'required' => false));

        $builder->add('loginDate','date',
            array(
                'widget' => 'single_text',
                'required' => false,
                'format' => 'dd-MM-yyyy',
                'label' => 'Tested Date',
                'attr' => array('class' => 'date')
            )
        );
        $builder->add('type', 'choice', array(
            'choices' => array(
                'Admin' => 'Admin',
                'Doctor' => 'Doctor',
                'Lab' => 'Lab',
                'Owner' => 'Owner',
                'Trainer' => 'Trainer'
            ),
            'required' => false,
            'empty_value' => 'Type',
            'label' => 'User Type'
        ));
        $builder->add('enabled', 'choice', array(
            'choices'   => array('1' => 'Yes', '0' => 'No'),
            'required'  => false,
            'empty_value' => 'Enabled',
            'label' => 'Enabled'
        ));

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver); // TODO: Change the autogenerated stub
    }

    public function getName()
    {
        return 'goldcrab_delma_userbundle_userFiltertype';
    }
}
