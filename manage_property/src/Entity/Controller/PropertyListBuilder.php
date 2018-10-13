<?php
namespace Drupal\manage_property\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Url;

/**
 * Provides a list controller for content_entity_manage_property entity.
 *
 * @ingroup manage_property
 */
class PropertyListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   *
   * We override ::render() so that we can add our own content above the table.
   * parent::render() is where EntityListBuilder creates the table using our
   * buildHeader() and buildRow() implementations.
   */
  public function render() {
    $build['description'] = array(
      '#markup' => $this->t('Content Entity Example implements a Property model. These contacts are fieldable entities. You can manage the fields on the <a href="@adminlink">Property admin page</a>.', array(
        '@adminlink' => \Drupal::urlGenerator()
          ->generateFromRoute('manage_property.property_settings'),
      )),
    );
    $build['table'] = parent::render();
    return $build;
  }

  /**
   * {@inheritdoc}
   *
   * Building the header and content lines for the property list.
   *
   * Calling the parent::buildHeader() adds a column for the possible actions
   * and inserts the 'edit' and 'delete' links as defined for the entity type.
   */
  public function buildHeader() {
    $header['id'] = $this->t('ContactID');
    $header['prop_group_id'] = $this->t('prop_group_id');
    $header['prop_city_name'] = $this->t('prop_city_name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\manage_property\Entity\Property */
    $row['id'] = $entity->id();
    $row['prop_group_id'] = $entity->prop_group_id->value;
    $row['prop_city_name'] = $entity->prop_city_name->value;
    return $row + parent::buildRow($entity);
  }

}

?>