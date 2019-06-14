<?php

namespace Drupal\file_upload\Plugin\Block;

use Drupal\Core\Block\Blockbase;

/**
* Provides a file_upload_number block.
*
* @Block(
* id = "file_upload_number_block",
* admin_label = @Translation("file_upload_number")
* )
*/
class File_upload_number extends BlockBase {
/*
   public function build() {
       $build = array('#markup' => $this->t('Welcome!'));

       return $build;
   }
   */
   public function build() {
   
   $name = \Drupal::currentUser()->isAuthenticated() ? \Drupal::currentUser()->getAccountName() : $this->t('anonymous');
   $build = [
     '#markup' => $this->t('Welcome %name. It is %time.', [
       '%name' => $name,
       '%time' => \Drupal::service('date.formatter')
         ->format(\Drupal::service('datetime.time')
           ->getCurrentTime(), 'custom', 'H:i s\s'),
     ]),
     '#cache'  => [
      'keys' => ['file_upload_number:block'],
      'max-age' => '10',
      'contexts' => ['user'],
     ],
   ];
   
   return $build;
   
 }
  
}