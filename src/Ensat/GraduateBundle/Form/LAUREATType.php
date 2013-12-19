<?php

namespace Ensat\GraduateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LAUREATType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sexe')
            ->add('nationalite')
            ->add('cin')
            ->add('nom')
            ->add('prenom')
            ->add('datenaissance')
            ->add('fixe')
            ->add('mobile')
            ->add('residence')
            ->add('email')
            ->add('photo')
            ->add('login')
            ->add('password')
            ->add('filiere')
            ->add('postes')
            ->add('reseaux')
            ->add('invitations')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ensat\GraduateBundle\Entity\LAUREAT'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ensat_graduatebundle_laureat';
    }
}
