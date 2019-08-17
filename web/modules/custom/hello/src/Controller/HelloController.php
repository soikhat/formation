<?php

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase{

  public function content($param){

    $name = $this-> currentUser()->getAccountName();
    return ["#markup"=>t('Welcome to the Hello page Mr/Mrs %name <br> aux parametres %param',['%name'=>$name,'%param'=>$param])];
  }
}
