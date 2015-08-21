<?php
/**
 * Created by PhpStorm.
 * User: Santiago
 * Date: 8/21/2015
 * Time: 12:48 PM
 */

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints;

class LoginForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('usuario',
                'text',
                [
                    'placeholder' => 'Usuario',
                    'constraints' => new Constraints\NotBlank(['message' => 'El nombre de usuario es necesario'])
                ])
        ->add('contrasena',
        'text',
        [
            'placeholder' => 'Contraseña',
            'constraints' => new Constraints\NotBlank(['message' => 'La contraseña es necesaria'])
        ]);
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'login_form';
    }

}