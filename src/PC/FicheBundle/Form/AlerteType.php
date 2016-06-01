<?php

namespace PC\FicheBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AlerteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule')
            ->add('objet','textarea')
            ->add('dateAlerte', 'genemu_jquerydate', [
                                                'widget' => 'single_text',
                                                'format' => 'dd-MM-yyyy',
                                                'attr' => [
                                                    'class' => 'input-inline datepicker',
                                                    'data-provide' => 'datepicker',
                                                    'data-date-format' => 'dd-mm-yyyy'
                                                ],'required' => false
                                            ])
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PC\FicheBundle\Entity\Alerte'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pc_fichebundle_alerte';
    }
}
