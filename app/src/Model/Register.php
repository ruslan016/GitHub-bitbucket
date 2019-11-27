<?php

namespace Tutorial\Model;

use Tutorial\Table;



class Register
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

        $email = $form['email'];
          
        
        $patient = Table\Admins::findOne(['email'=>$email ]);

        // echo '<pre>';
        // print_r( $_SESSION['email']);
        // die;
        $hasedPassword = password_hash($form['password'], PASSWORD_BCRYPT);

        $patient->firstName = $form['firstName'];
        $patient->lastName  = $form['lastName'];
        $patient->password = $hasedPassword;
        $patient->status = 'confirmed';

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