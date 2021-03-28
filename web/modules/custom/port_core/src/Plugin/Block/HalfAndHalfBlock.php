<?php

namespace Drupal\port_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a half and half block.
 *
 * @Block(
 *   id = "port_core_half_and_half",
 *   admin_label = @Translation("Half and Half"),
 *   category = @Translation("Custom")
 * )
 */
class HalfAndHalfBlock extends BlockBase {

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
