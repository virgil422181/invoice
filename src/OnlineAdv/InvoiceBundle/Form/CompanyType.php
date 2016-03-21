<?php

namespace OnlineAdv\InvoiceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompanyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tip')
            ->add('name')
            ->add('cif')
            ->add('address')
            ->add('city')
            ->add('state')
            ->add('fax')
            ->add('phone')
            ->add('registrationId')
            ->add('companyStatus')
            ->add('vat')
            ->add('zip')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OnlineAdv\InvoiceBundle\Entity\Company'
        ));
    }
}
