<?php

namespace PC\FicheBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
//use Symfony\Component\Form\Extension\Core\Type\FileType;

class FichierType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('nom')
//            ->add('dateDeCreation')
            ->add('fichier', 'file')
//            ->add('chartePartenariat')
//            ->add('madSalles')
//            ->add('madEvenementGratuit')
//            ->add('pifeClassique')
//            ->add('pifeLaboratoire')
//            ->add('psCati')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PC\FicheBundle\Entity\Fichier'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pc_fichebundle_fichier';
    }
}
