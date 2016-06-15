<?php

namespace PC\FicheBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MappingType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeprincipal')
            ->add('typesecondaire1')
            ->add('typesecondaire2')
            ->add('typesecondaire3')
            ->add('m1')
            ->add('m2')
            ->add('m3')
            ->add('m4')
            ->add('m5')
            ->add('m6')
            ->add('m7')
            ->add('m8')
            ->add('m9')
            ->add('m10')
            ->add('m11')
            ->add('m12')
            ->add('m13')
            ->add('m14')
            ->add('m15')
            ->add('m16')
            ->add('m17')
            ->add('m18')
            ->add('m19')
            ->add('m20')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PC\FicheBundle\Entity\Mapping'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pc_fichebundle_mapping';
    }
}
