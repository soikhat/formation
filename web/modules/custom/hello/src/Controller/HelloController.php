<?php

namespace Drupal\hello\Controller;
use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {

  public function content($param){


    return ['#markup'=>t('you are on the Hello page. voici le parametre %param',['%param'=>$param])];
  }

}
