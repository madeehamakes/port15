<?php

namespace Drupal\port_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an accordion block.
 *
 * @Block(
 *   id = "port_core_accordion",
 *   admin_label = @Translation("Accordion"),
 *   category = @Translation("Custom")
 * )
 */
class AccordionBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#markup' => $this->t('It works!'),
    ];
    return $build;
  }

}
