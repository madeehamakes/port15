<?php

namespace Drupal\port_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a footer block.
 *
 * @Block(
 *   id = "port_core_footer",
 *   admin_label = @Translation("Footer"),
 *   category = @Translation("Custom")
 * )
 */
class FooterBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // $build['content'] = [
      // '#markup' => $this->t('It works!'),
      // ];
    $build = [];
    return $build;
  }

}
