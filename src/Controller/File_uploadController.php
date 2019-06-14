<?php

namespace Drupal\file_upload\Controller;

use Drupal\Core\Controller\ControllerBase;

class File_uploadController extends ControllerBase {

 /**
  * @param string $param
  * @return array
  */
 public function content($param = '') {
   $message = $this->t('You are on the file_upload page. Your name is @username! @param', [
     '@username' => $this->currentUser()->getAccountName(),
     '@param' => $param,
   ]);

   return ['#markup' => $message];
 }

}
