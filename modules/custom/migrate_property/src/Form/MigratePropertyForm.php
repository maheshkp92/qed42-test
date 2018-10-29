<?php

/**  
* @file  
* Contains Drupal\migrate_property\Form\MigratePropertyForm.  
*/

namespace Drupal\migrate_property\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\file\Entity\File;

class MigratePropertyForm extends FormBase {  
  
  /**
  * {@inheritdoc}  
  */  
  public function getFormId() {  
    return 'property_upload_form';  
  }

  /**  
  * {@inheritdoc}  
  */  
  public function buildForm(array $form, FormStateInterface $form_state) {
  
    $form['managed_file'] = [
      '#type' => 'managed_file',
      '#title' => 'Managed file',
      '#description' => $this->t('Manage file, #type = managed_file'),
    ];

    // Add a submit button that handles the submission of the form.
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
      '#description' => $this->t('Submit, #type = submit'),
    ];
    
    return $form;
  }

  /**  
  * {@inheritdoc}  
  */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    
    $fid = $form_state->getValue(['managed_file', 0]);
    if (!empty($fid)) {
      $file = File::load($fid);
      $file->setPermanent();
      $file->save();
    }
  }
}