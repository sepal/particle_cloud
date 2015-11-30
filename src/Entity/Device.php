<?php

/**
 * @file
 * Contains \Drupal\particle_cloud\Entity\Device.
 */

namespace Drupal\particle_cloud\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\particle_cloud\DeviceInterface;

/**
 * Defines the Device entity.
 *
 * @ConfigEntityType(
 *   id = "device",
 *   label = @Translation("Device"),
 *   handlers = {
 *     "list_builder" = "Drupal\particle_cloud\DeviceListBuilder",
 *     "form" = {
 *       "add" = "Drupal\particle_cloud\Form\DeviceForm",
 *       "edit" = "Drupal\particle_cloud\Form\DeviceForm",
 *       "delete" = "Drupal\particle_cloud\Form\DeviceDeleteForm"
 *     }
 *   },
 *   config_prefix = "device",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/device/{device}",
 *     "edit-form" = "/admin/structure/device/{device}/edit",
 *     "delete-form" = "/admin/structure/device/{device}/delete",
 *     "collection" = "/admin/structure/visibility_group"
 *   }
 * )
 */
class Device extends ConfigEntityBase implements DeviceInterface {
  /**
   * The Device ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Device label.
   *
   * @var string
   */
  protected $label;

  /**
   * The Device particle id.
   */
  protected $particleId;

  /**
   * The Device type.
   */
  protected $type;

  public function getLabel() {
    return $this->label;
  }

  public function getId() {
    return $this->id;
  }
  public function getParticleId() {
    return $this->particleId;
  }

  public function getType() {
    return $this->type;
  }

  public function setId($id) {
  }

  public function setLabel($label) {
  }

  public function setParticleId($id) {
  }

  public function setType($type) {
  }
}
