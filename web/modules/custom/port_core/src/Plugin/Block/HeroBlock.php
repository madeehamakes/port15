<?php

namespace Drupal\port_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a hero block.
 *
 * @Block(
 *   id = "port_core_hero",
 *   admin_label = @Translation("Hero"),
 *   category = @Translation("Custom")
 * )
 */
class HeroBlock extends BlockBase {

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
