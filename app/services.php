<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 20/07/16
 * Time: 09:57
 */

$app['security'] = function () {
    return new Security\Security();
};

$app['user.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\Webpdv\Entities\User::class);
};

$app['cargo.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\Webpdv\Entities\Cargo::class);
};

$app['user.cargos'] = function () use ($app) {
    return $app['cargo.repository']->fetchAll();
};

$app['email.confirmation.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\Webpdv\Entities\EmailConfirmation::class);
};

$app['loja.repository'] = function() use ($app){
    return $app['orm.em']->getRepository(\Webpdv\Entities\Loja::class);
};

$app['user.controller'] = function ($app) {
    return new \Webpdv\Controllers\UserController($app['user.repository'], $app);
};

$app['user.service'] = function () use ($app){
    return new \Webpdv\Services\UserService($app);
};

$app['email.confirmation.service'] = function () use ($app){
    return new \Webpdv\Services\EmailConfirmationService($app);
};

$app['user.email.service'] = function() use ($app){

    $assunto = 'Bem Vindo Ao site';
    $from = 'cezzaar@gmail.com';
    $body = $app['twig']->render('email_confirmation.twig', ['body' => 'Bem Vindo', 'uuid' => $app['uuid.service']]);

    return new \Webpdv\Services\EmailService($assunto, $from, $body);
};

$app['uuid.service'] = function(){
    return Ramsey\Uuid\Uuid::uuid4();
};