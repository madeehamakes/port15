<?php

namespace Drupal\port_core\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class EntityPasswordSettingsForm extends ConfigFormBase {
  protected function getEditableConfigNames() {
    return ['port_core.password_settings'];
  }

  public function getFormId() {
    return 'entity_password_settings';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('port_core.password_settings');

    $form['password_options'] = [
      '#type' => 'select',
      '#title' => 'Password Options',
      '#description' => 'When content is protected using a password, should the token/password be selected from a predefined list or should it be manually typed in?',
      '#options' => [
        'manual' => 'Manually enter password',
        'list' => 'Select password from predefined options'
      ],
      '#required' => TRUE,
      '#default_value' => $config->get('password_options') ?? 'manual'
    ];

    $form['available_passwords'] = [
      '#type' => 'textarea',
      '#title' => 'Available Passwords',
      '#cols' => 12,
      '#rows' => 3,
      '#description' => 'Type the password(s) available for selection on content. Enter 1 password per line.',
      '#default_value' => $config->get('available_passwords') ?? ''
    ];

    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $password_option = $values['password_options'];
    $available_passwords = $values['available_passwords'];

    $this->config('port_core.password_settings')
      ->set('password_options', $password_option)
      ->set('available_passwords', $available_passwords)
      ->save();

    return parent::submitForm($form, $form_state);
  }

}
