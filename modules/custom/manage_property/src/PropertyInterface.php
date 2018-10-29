<?php
namespace Drupal\manage_property;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a Property entity.
 * @ingroup manage_property
 */
interface PropertyInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
?>