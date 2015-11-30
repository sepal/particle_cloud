<?php

/**
 * @file
 * Contains \Drupal\particle_cloud\Form\DeviceForm.
 */

namespace Drupal\particle_cloud\Form;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class DeviceForm.
 *
 * @package Drupal\particle_cloud\Form
 */
class DeviceForm extends EntityForm {
  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $device = $this->entity;
    $form['label'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $device->label(),
      '#description' => $this->t("Label for the Device."),
      '#required' => TRUE,
    );

    $form['id'] = array(
      '#type' => 'machine_name',
      '#default_value' => $device->id(),
      '#machine_name' => array(
        'exists' => '\Drupal\particle_cloud\Entity\Device::load',
      ),
      '#disabled' => !$device->isNew(),
    );

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $device = $this->entity;
    $status = $device->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Device.', [
          '%label' => $device->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Device.', [
          '%label' => $device->label(),
        ]));
    }
    $form_state->setRedirectUrl($device->urlInfo('collection'));
  }

}
