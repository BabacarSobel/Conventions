<?php

namespace PC\FicheBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EditConventionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contenu',  'genemu_tinymce')
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pc_fichebundle_editconvention';
    }
}
