<?php

namespace App\View\Helper;

use Cake\View\Helper;

class AccessHelper extends Helper
{
    public function getUsername()
    {
        $name = '';

        $logged_in_user_name = $this->Authentication->getIdentity()->username;
        
        if ($logged_in_user_name) {
            $name = $this->request->getSession()->write('name', $logged_in_user_name);
        }

        return $name;
    }
}

?>