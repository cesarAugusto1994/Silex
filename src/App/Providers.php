<?php

namespace App;

/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 20/07/16
 * Time: 09:02
 */
class Providers extends \Silex\Application
{
    public static function setProvider($providers)
    {
        foreach ($providers as $provider) {
            return self::register($provider);
        }
    }
}