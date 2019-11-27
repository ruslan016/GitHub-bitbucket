<?php

namespace Tutorial\Form;

use Pop\Form\Form;
use Pop\Validator\LengthLte;

class Admin extends Form
{

    public function __construct(array $fields = null, $action = null, $method = 'post')
    {
        parent::__construct($fields, $action, $method);

        $fieldConfig = [
            'email' => [
                'type'       => 'text',
                'label'      => 'Name (Optional)',
                'attributes' => [
                    'size'   => 60
                ]
            ],
            'type' => [
                'type'       => 'select',
                'label'  => 'Type',
                'values' => [
                    'type1' => 'type1',
                    'type2' => 'type2',
                    'type3' => 'type3'
                ],
                'selected' => 'United States'
                ],
            'submit' => [
                'type'  => 'submit',
                'value' => 'Submit'
            ]
        ];

        $this->addFieldsFromConfig($fieldConfig);
    }

}