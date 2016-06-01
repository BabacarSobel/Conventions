<?php

namespace PC\FicheBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DemandeChartePartenariatType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule')
            ->add('objet')
            ->add('cocontractant')
            ->add('adresseSiege','textarea')
            ->add('titreRepresentant','genemu_jqueryselect2_choice',array(
                                                        'choices' => array(
                                                            'Mr' => 'Mr',
                                                            'Mme' => 'Mme',
                                                        ),'required' => false
                                                    ))
            ->add('nomRepresentant','text',array('required' => false))
            ->add('prenomRepresentant','text',array('required' => false))
            ->add('fonctionRepresentant','genemu_jqueryselect2_choice', array(
                                                                    'choices' => array(
                                                                        '' => null,
                                                                        'Directeur' => 'Directeur',
                                                                        'Président' => 'Président',
                                                                        'Dirigeant' => 'Dirigeant',
                                                                        'Représentant' => 'Représentant',
                                                                        'Administrateur' => 'Administrateur',
                                                                    ),'required' => false
                                                                ))
            ->add('demandeurPolytech','text',array('required' => false))
            ->add('dateEffet','genemu_jquerydate', [
                                                'widget' => 'single_text',
                                                'format' => 'dd-MM-yyyy',
                                                'attr' => [
                                                    'class' => 'input-inline datepicker',
                                                    'data-provide' => 'datepicker',
                                                    'data-date-format' => 'dd-mm-yyyy'
                                                ],'required' => false
                                            ])
            ->add('dateEcheance','genemu_jquerydate', [
                                                'widget' => 'single_text',
                                                'format' => 'dd-MM-yyyy',
                                                'attr' => [
                                                    'class' => 'input-inline datepicker',
                                                    'data-provide' => 'datepicker',
                                                    'data-date-format' => 'dd-mm-yyyy'
                                                ],'required' => false
                                            ])
            ->add('actionDemandee','genemu_jqueryselect2_choice', array(
                                                                    'choices' => array(
                                                                        '' => null,
                                                                        'VALIDATION JURIDIQUE' => 'VALIDATION JURIDIQUE',
                                                                        'EDITION CONVENTION' => 'EDITION CONVENTION',
                                                                        'AUTRE' => 'AUTRE',
                                                                    ),'required' => false
                                                                ))
            ->add('observations','textarea',array('required' => false))
            ->add('fluxFinancier','number')
            ->add('reservationFonds','text',array('required' => false))
            ->add('titreReferentEntreprise','genemu_jqueryselect2_choice',array(
                                                        'choices' => array(
                                                            'Mr' => 'Mr',
                                                            'Mme' => 'Mme',
                                                        ),'required' => true
                                                    ))
            ->add('nomReferent')
            ->add('prenomReferent')
            ->add('emailReferent','email')
            ->add('telephoneReferent')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PC\FicheBundle\Entity\ChartePartenariat'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pc_fichebundle_chartepartenariat';
    }
}
