<?php

namespace PC\UserBundle\Form\Type;

use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegisterType extends RegistrationFormType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        parent::buildForm($builder, $options);

        $builder
            ->add('firstname', 'text', array(
                'label' => 'Prénom',
                'translation_domain' => 'forms'
            ))
            ->add('lastname', 'text', array(
                'label' => 'Nom',
                'translation_domain' => 'forms'
            ))
                        ->add('departement','genemu_jqueryselect2_choice', array(
                                                                    'choices' => array(
                                                                        '' => null,
                                                                        'IG' => 'IG',
                                                                        'MEA' => 'MEA',
                                                                        'MI' => 'MI',
                                                                        'STIA' => 'STIA',
                                                                        'ERII' => 'ERII',
                                                                        'STE' => 'STE',
                                                                        'Relindus' => 'Relindus',
                                                                        'Relinter' => 'Relinter',
                                                                        'Direction' => 'Direction',
                                                                    ),'required' => false
                                                                ))
        ;
    }

    public function setDefaultOption(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'validation_groups' => array('Default', 'Register')
        ));
    }

    public function getName()
    {
        return 'pc_sonata_user_register';
    }
} 