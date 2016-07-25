<?php

/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 19/07/16
 * Time: 14:41
 */

use Silex\WebTestCase;

/**
 * Class IndexTest
 */
class IndexTest extends WebTestCase
{

    public function createApplication()
    {
        return require __DIR__.'/../../../app/app.php';
        $app['debug'] = true;
        return $app;
    }
}