<?php

namespace PC\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom','text',array('required' => false))
            ->add('nom','text',array('required' => false))
            ->add('email')
            ->add('')
            ->add('validation','checkbox',array('required' => false))
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
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PC\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pc_userbundle_user';
    }
}
