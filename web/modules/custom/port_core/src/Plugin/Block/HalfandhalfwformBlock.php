<?php

namespace Drupal\port_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a halfandhalfwform block.
 *
 * @Block(
 *   id = "port_core_halfandhalfwform",
 *   admin_label = @Translation("HalfandHalfwForm"),
 *   category = @Translation("Custom")
 * )
 */
class HalfandhalfwformBlock extends BlockBase {

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
