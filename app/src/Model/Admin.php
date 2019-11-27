<?php

namespace Tutorial\Model;

use Tutorial\Table;

class Admin
{

    public function getAll(array $options = null)
    {
        if (null === $options) {
            $options = ['email' => 'id ASC'];
        }
        return Table\Admins::findAll($options);
    }

    public function getById($id)
    {
        return Table\Admins::findById($id);
    }

    public function save($form)
    {
        $token = 'asdhgdsjfhgsjfksldjfsJHDFKDSFUJNDSLKDSFKJ123243343534*)^%(_#';
        $token = str_shuffle($token);
        $token = substr($token, 0, 15);

        $patient = new Table\Admins([
            'email' => $form['email'],
            'type'  => $form['type'],
            'token' => $token,
            'status'=> 'created'
        ]);

        
        $patient->save();
    }

    public function remove($id)
    {
        $patient = Table\Admins::findById($id);
        if (isset($patient->id)) {
            $patient->delete();
        }
    }

}