<?php

namespace PC\FicheBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityManager;

class TemplateType extends AbstractType
{
    
    private $em;

    public function __construct(EntityManager $entityManager) {
        $this->em = $entityManager;
    }

        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text')
            ->add('template','genemu_tinymce')
            ->add('type','genemu_jqueryselect2_choice', array('choices' => $this->getValues()));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PC\FicheBundle\Entity\Template'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pc_fichebundle_template';
    }
    
    public function getValues(){
        $entities = $this->em->getRepository('PCFicheBundle:SousType')
               ->createQueryBuilder('e')
               ->select('e')
               ->getQuery()
               ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
//       $entities = $this->em->getRepository('PCFicheBundle:Type')->findAll();
        $values = array();
        foreach ($entities as $entity){
            $values[$entity['id']] = $entity['nom'];
        }
        return $values;
    }
}
