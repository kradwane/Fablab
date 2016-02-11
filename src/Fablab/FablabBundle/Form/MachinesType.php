<?php

namespace Fablab\FablabBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fablab\FablabBundle\Form\ImageType;

class MachinesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomM')
            ->add('infogenerale')
            ->add('surface')
            ->add('resolution')
            ->add('precisionm')
            ->add('logicielu')
            ->add('formatfich')
            ->add('materiauxu')
            ->add('puissance')
            ->add('image', new ImageType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fablab\FablabBundle\Entity\Machines'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fablab_fablabbundle_machines';
    }
}
