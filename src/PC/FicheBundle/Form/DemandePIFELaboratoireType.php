<?php

namespace PC\FicheBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DemandePIFELaboratoireType extends AbstractType
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
            ->add('titreEtudiant','genemu_jqueryselect2_choice',array(
                                                        'choices' => array(
                                                            'Mr' => 'Mr',
                                                            'Mme' => 'Mme',
                                                        ),'required' => false
                                                    ))
            ->add('nomEtudiant')
            ->add('prenomEtudiant')
            ->add('adresseEtudiant','textarea')
            ->add('dateNaissanceEtudiant','genemu_jquerydate', [
                                                'widget' => 'single_text',
                                                'format' => 'dd-MM-yyyy',
                                                'attr' => [
                                                    'class' => 'input-inline datepicker',
                                                    'data-provide' => 'datepicker',
                                                    'data-date-format' => 'dd-mm-yyyy'
                                                ],'required' => false
                                            ])
            ->add('emailEtudiant','email')
            ->add('departementEtudiant','genemu_jqueryselect2_choice', array(
                                                                    'choices' => array(
                                                                        'EGC' => 'EGC',
                                                                        'ENR' => 'ENR',
                                                                        'GBA' => 'GBA',
                                                                        'IG' => 'IG',
                                                                        'MAT' => 'MAT',
                                                                        'MEA' => 'MEA',
                                                                        'MI' => 'MI',
                                                                        'MSI' => 'MSI',
                                                                        'PEIP' => 'PEIP',
                                                                        'SE' => 'SE',
                                                                        'STE' => 'STE',
                                                                    ),'required' => true
                                                                ))
            ->add('typeUnite')
            ->add('numeroUnite')
            ->add('titreEncadrant','genemu_jqueryselect2_choice',array(
                                                        'choices' => array(
                                                            'Mr' => 'Mr',
                                                            'Mme' => 'Mme',
                                                        )
                                                    ))
            ->add('nomEncadrant')
            ->add('prenomEncadrant')
            ->add('titreReferent','genemu_jqueryselect2_choice',array(
                                                        'choices' => array(
                                                            'Mr' => 'Mr',
                                                            'Mme' => 'Mme',
                                                        )
                                                    ))
            ->add('nomReferent')
            ->add('prenomReferent')
            ->add('titreProjet')
            ->add('numeroConventionCati','text',array('required' => false))

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PC\FicheBundle\Entity\PIFELaboratoire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pc_fichebundle_pifelaboratoire';
    }
}
