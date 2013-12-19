<?php

namespace Ensat\GraduateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class POSTEType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intutile')
            ->add('datedebut')
            ->add('datefin')
            ->add('entreprise')
            ->add('lieudetravail')
            ->add('secteur')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ensat\GraduateBundle\Entity\POSTE'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ensat_graduatebundle_poste';
    }
}
