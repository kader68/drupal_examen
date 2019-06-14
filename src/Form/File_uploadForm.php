<?php
namespace Drupal\file_upload\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\CssCommand;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\State\StateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


/**
 * Implements a file_upload form
 */

class File_uploadForm extends FormBase
{
	/**
	 * {@inheritdoc}.
	 */
	public function getFormID(){
		return 'file_upload_form';
	}
	/**
	 * {@inheritdoc}.
	 */
	public function buildForm(array $form, FormStateInterface $form_state){
    // Champs pour le téléchargement de fichier
                    
    $form['upload'] = [
      '#type' => 'managed_file',
      '#title' => $this->t('champs upload'),            
    ];
     
    // Validation du formulaire

    $form['actions'] = [
      '#type' => 'actions',
    ];

    // Add a submit button that handles the submission of the form.
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    $form['actions']['reset'] = array(
  '#type' => 'submit',
  '#value' => t('Reset'),
  '#submit' => array('reset'),
);

		return $form;
	}

 
  function reset(array $form, FormStateInterface $form_state) {
  $form_state['rebuild'] = FALSE;

  }

	/**
	 * {@inheritdoc}.
	 */


	public function submitForm(array &$form, FormStateInterface $form_state){
	         

           
       }

     public function validateForm(array &$form, FormStateInterface $form_state){
           
          
        }
	

}