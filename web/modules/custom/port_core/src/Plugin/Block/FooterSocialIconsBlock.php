<?php

namespace Drupal\port_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a footer-social-icons block.
 *
 * @Block(
 *   id = "port_core_footer_social_icons",
 *   admin_label = @Translation("Footer-Social-Icons"),
 *   category = @Translation("Custom")
 * )
 */
class FooterSocialIconsBlock extends BlockBase {

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
