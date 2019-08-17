<?php

namespace Drupal\hello\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Provides a hello block
* @Block(
*   id = "hello_block",
*   admin_label = @translation("Hello")
* )
* @package Drupal\hello\Plugin\Block
*/
class HelloBlock extends BlockBase {

  /*
  * Implements Drupal\Core\Block\BlockBase::build()
  */

  public function build(){

    $temps = \Drupal::Time()->getCurrentTime();
    $user = \Drupal::CurrentUser()->getAccountName() ;
    $formatemps = \Drupal::Service('date.formatter')->format($temps,'Y-m-d\TH:i:s');

    $build = ["#markup"=>t('Welcome on our website Mr %user. It is %temps',['%temps'=> $formatemps, '%user'=>$user]),
              "#cache"=>[
                'keys'=>['helloblock.cache'],
                'contexts'=>['user','timezone'],
                'max-age'=>'10'
                ]];

    return $build;
  }
}
