<?php

namespace Drupal\port_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a logos block.
 *
 * @Block(
 *   id = "port_core_logos",
 *   admin_label = @Translation("Logos"),
 *   category = @Translation("Custom")
 * )
 */
class LogosBlock extends BlockBase {

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
