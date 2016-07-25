<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 20/07/16
 * Time: 11:04
 */

$app->get('/', function(\Symfony\Component\HttpFoundation\Request $request) use($app) {
    return $app['security']->login($request, $app);
})->bind('login');

$app->error(function (\Exception $e, $code) use ($app) {

    switch ($code) {
        case 400 :
            $message = 'Bad request.';
            break;
        case 401 :
            $message = 'Page not found.';
            break;
        default:
            $message = 'Arquivo nao existente.';
            break;
    }

    return $app['twig']->render('404.twig', ['error' => $message]);
});

$app->post('/admin/login_check', function(\Symfony\Component\HttpFoundation\Request $request) use($app) {

})->bind('login_check');

$app->get('/forget_pass',function () use ($app) {
    return $app['twig']->render('forget_pass.twig');
})->bind('forget_pass');

$app->match('/register',function (\Symfony\Component\HttpFoundation\Request $request) use ($app) {
    return $app['user.controller']->createUser($request, $app);
})->bind('register');

$app->get('/admin/logout', function() use($app){
    
})->bind('logout');

$app->get('/lockscreen', function() use($app){
    return $app['twig']->render('lockscreen.twig');
})->bind('lockscreen');

$app->get(
    '/not_found',
    function () use ($app) {
        return $app['twig']->render('404.twig');
    }
)->bind('not_found');

$app->get('/admin/', function() use ($app){
    $app['session']->set('user', $app['user']);
    $app['session']->save();
    return $app['twig']->render('admin/index.twig');
})->bind('index');

$app->match('/admin/users_list',function () use ($app) {
    return $app['user.controller']->getUsers();
})->bind('users_list');

$app->match('/admin/users_list/',function (\Symfony\Component\HttpFoundation\Request $request) use ($app) {
    return $app['user.controller']->getUsers($request->get('loja'), $request->get('username'));
})->bind('users_list_find');

$app->get('/profile/{idUser}', function($idUser) use($app) {
    return $app['user.controller']->getUserProfile($idUser);
})->bind('profile')->assert('id', '\d+');

$app->get('/update_user/{idUser}', function($idUser, \Symfony\Component\HttpFoundation\Request $request) use($app){
    return $app['user.controller']->updateUser($idUser, $request);
})->bind('update_user');

$app->get('/cargos', function () use ($app) {
    return $app['twig']->render('users/cargos.twig', ['cargos' => $app['cargo.repository']->findAll()]);
})->bind('cargos');
