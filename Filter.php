<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: maskas
 * Date: 4/10/14
 * Time: 9:56 AM
 */

namespace Plugin\Favicon;


class Filter {
    public static function ipSendResponse($response)
    {
        if (is_object($response) && method_exists($response, 'setFavicon')) {
            $response->setFavicon(ipFileUrl('Plugin/Favicon/assets/favicon.ico'));
        }
        return $response;
    }
}
