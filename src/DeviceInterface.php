<?php

/**
 * @file
 * Contains \Drupal\particle_cloud\DeviceInterface.
 */

namespace Drupal\particle_cloud;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Provides an interface for defining Device entities.
 */
interface DeviceInterface extends ConfigEntityInterface {
  // Add get/set methods for your configuration properties here.

  public function getLabel();
  public function setLabel($label);

  public function getId();
  public function setId($id);

  public function getParticleId();
  public function setParticleId($id);

  public function getType();
  public function setType($type);
}
