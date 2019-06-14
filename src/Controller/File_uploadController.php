<?php

namespace Drupal\file_upload\Controller;

use Drupal\Core\Controller\ControllerBase;

class File_uploadController extends ControllerBase {

 /**
  * @param string $param
  * @return array
  */
 public function content($param) {
  $nbr = \Drupal::state()->get('key');

    if($nbr == NULL){

        \Drupal::state()->set('key','value');

    }else{ 
           }

   return ['#markup' => $nbr];
 }

}
