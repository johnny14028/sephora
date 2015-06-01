<?php

namespace Core\SecurityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LoginType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('_username', 'text', array('required' => 'required', 'block_name' => '_username'));
        $builder->add('_password', 'password', array('required' => 'required'));
        $builder->add('hdnUrlAjax', 'hidden');
        $builder->add('btnLogin', 'submit', array('attr' => array('value' => 'ddd')));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Core\SecurityBundle\Entity\Config'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'core_securitybundle_config';
    }

}
