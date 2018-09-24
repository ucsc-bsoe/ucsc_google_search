<?php

namespace Drupal\ucsc_google_search\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a Google Search Block.
 *
 * @Block(
 *   id = "ucsc_google_search_block",
 *   admin_label = @Translation("BSOE Google Search"),
 *   category = @Translation("UCSC"),
 * )
 */
class UCSCGoogleSearchBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t(
        '<form action="//www.google.com/cse" id="ucsc-google-search-box">
        <div>
        <input type="hidden" name="cx" value="017169960574386565130:utqkivt52bq" />
        <input type="hidden" name="ie" value="UTF-8" />
        <input type="text" name="q" size="31" id="ucsc-google-search-input" />
        <input type="submit" name="sa" value="Search" id="ucsc-google-search-submit" class="button"/>
        </div>
        </form>
        <div class="directions">Search all BSOE Sites for content</div>
      '),
    );
  }

}
