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

            $favicon = ipFileUrl('Plugin/Favicon/assets/favicon.ico');
            $customFavicon = ipGetOption('Favicon.faviconPath');

	    // Makes sure there is a favicon setup and is different from the default one
            if ($customFavicon != '' and $customFavicon != 'favicon.ico'){
                $favicon = ipFileUrl($customFavicon);
            }

            $response->setFavicon($favicon);
        }
        return $response;
    }
}
