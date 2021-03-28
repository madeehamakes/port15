<?php

namespace Drupal\port_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a footer-copyright block.
 *
 * @Block(
 *   id = "port_core_footer_copyright",
 *   admin_label = @Translation("Footer-Copyright"),
 *   category = @Translation("Custom")
 * )
 */
class FooterCopyrightBlock extends BlockBase {

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
