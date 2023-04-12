<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\ORM\TableRegistry;


class AccessComponent extends Component
{
    public function getUsername()
    {
        $name = '';

        if ($this->Authentication->getIdentity()) {
            $name = $this->Authentication->getIdentity()->username;
        }

        return $name;
    }
}
