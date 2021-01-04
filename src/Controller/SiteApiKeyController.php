<?php

namespace Drupal\site_api_key\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Drupal\node\NodeInterface;

/**
 * Controller routines for site api key routes.
 */
class SiteApiKeyController extends ControllerBase {

   /**
   * Construct json repesentation of node.
   *
   * This callback is mapped to the path
   * 'page_json/{siteapikey}/{node}'.
   *
   * @param string $siteapikey
   *   A string use to check with site api key.
   * @param object $node
   *   Node Object.
   *
   * @throws \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException
   *   If the parameters are invalid.
   *
   * @return markup $page_json
   *  Json represent of the node.
   */
  public function content($siteapikey, NodeInterface $node) {
    // Get stored 'site api key'
    $site_api_key = \Drupal::config('site_api_key.configuration')->get('siteapikey');
    /**
    * Validate site api key is set and it match with 
    * argument also check type of node is page.
    */
    if ($site_api_key != $siteapikey || $site_api_key == 'API key not set yet' || $node->getType() != 'page') {
      // We will just show a standard "access denied" page in this case.
      throw new AccessDeniedHttpException();
    }
    // Convert node object into json string.
    $node_array = (array) $node;
    $page_json = json_encode($node_array, JSON_PRETTY_PRINT);
   
    return $page_json;
  }

}