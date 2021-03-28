<?php

namespace Drupal\port_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a call to action block.
 *
 * @Block(
 *   id = "port_core_call_to_action",
 *   admin_label = @Translation("Call to Action"),
 *   category = @Translation("Custom")
 * )
 */
class CallToActionBlock extends BlockBase {

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
