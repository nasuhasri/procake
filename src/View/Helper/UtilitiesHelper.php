<?php

namespace App\View\Helper;

use Cake\View\Helper;

class UtilitiesHelper extends Helper
{
  public function getUsername(){
    $name = '';

    if($this->Authentication->getIdentity()){
      $name = $this->Authentication->getIdentity()->username;
    }

    return $name;
  }
}
?>