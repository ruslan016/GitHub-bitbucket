<?php

namespace Tutorial\Form;

use Pop\Form\Form;
use Pop\Validator;
use Pop\Validator\LengthLte;

class Register extends Form
{

    public function __construct(array $fields = null, $action = null, $method = 'post')
    {
        parent::__construct($fields, $action, $method);

        $fieldConfig = [
            'firstName' => [
                'type'       => 'text',
                'label'      => 'First name',
                // 'required'   => true,
                // 'validators' => new Validator\Alpha(),
                'attributes' => [
                    'size'  => 60
                ]
            ],
            'lastName' => [
                'type'       => 'text',
                'label'      => 'Last name',
                // 'required'   => true,
                // 'validators' => new Validator\Alpha(),
                'attributes' => [
                    'size'  => 60
                ]
            ],
            'email' => [
                'type'       => 'text',
                'label'      => 'Name (Optional)',
                'attributes' => [
                    'size'   => 60
                    ]
                ],
            'password' => [
                'type'       => 'password',
                'label'      => 'Password',
                // 'required'   => true,
                // 'validators' => new Validator\GreaterThanEqual(6),
                'attributes' => [
                    'class' => 'password-field',
                    'size'  => 60
                ]
            ],
            'submit' => [
                'type'  => 'submit',
                'value' => 'Submit',
                'attributes' => [
                    'class' => 'submit-btn'
                ]
            ]
        ];

        $this->addFieldsFromConfig($fieldConfig);
    }

}