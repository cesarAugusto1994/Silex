<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 19/07/16
 * Time: 09:58
 */

$loader = require __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app['application.default.user.avatar'] = '/assets/custom/img/avatar5.png';

require_once __DIR__.'/providers.php';
require_once __DIR__.'/services.php';
require_once __DIR__.'/routes.php';

$app['security.authentication.failure_handler.admin'] = function ($app) {
    return new \Security\FailureHandler($app);
};

return $app;