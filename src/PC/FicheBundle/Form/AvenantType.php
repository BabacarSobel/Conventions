<?php

namespace PC\FicheBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AvenantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typePartenaire','genemu_jqueryselect2_choice', array(
                                                                    'choices' => array(
                                                                        '' => null,
                                                                        'Utilisateur'=> 'Utilisateur',
                                                                        'Société'=> 'Société',
                                                                        'Association'=> 'Association',
                                                                        'Organisme d\'accueil'=> 'Organisme d\'accueil',
                                                                        'Partenaire'=> 'Partenaire',
                                                                        'Demandeur'=> 'Demandeur', 
                                                                        'Prestataire'=> 'Prestataire',
                                                                    ),'required' => false
                                                                ))
            ->add('objet','genemu_jqueryselect2_choice', array(
                                                                    'choices' => array(
                                                                        '' => null,
                                                                        'proroger'=> 'proroger',
                                                                        'modifier'=> 'modifier',
                                                                        'proroger et modifier'=> 'proroger et modifier',
                                                                    ),'required' => false
                                                                ))
            ->add('motif','textarea',array('required' => true))
            ->add('numeroParagrapheModifie')
            ->add('numeroArticleModifie')
            ->add('intituleArticleModifie')
            ->add('nouveauTexte','textarea',array('required' => false))
            ->add('numeroArticleDuree')
            ->add('intituleArticleDuree') 
			->add('nbMoisProrogation')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PC\FicheBundle\Entity\Avenant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pc_fichebundle_avenant';
    }
}
