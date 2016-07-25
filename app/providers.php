<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 20/07/16
 * Time: 11:02
 */

$app->register(new \Silex\Provider\DoctrineServiceProvider(), array(
    'dbs.options' => array(
        'default' => array(
            'dbname' => 'silex',
            'user' => 'root',
            'password' => 'mestre',
            'host' => 'localhost',
            'driver' => 'pdo_mysql',
        )
    ),
));

$app->register(new \Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider(), array(
    'orm.proxies_dir' => __DIR__.'/../var/cache/doctrine/',
    'orm.em.options' => array(
        'mappings' => array(
            array(
                'type' => 'annotation',
                'namespace' => 'Webpdv\Entities',
                'path' => __DIR__.'/../src',
                'use_simple_annotation_reader' => false
            ),
            array(
                'type' => 'annotation',
                'namespace' => 'Webpdv\Controller',
                'path' => __DIR__.'/../src',
                'use_simple_annotation_reader' => false
            ),
        ),
    ),
));
$app->register(new Silex\Provider\SwiftmailerServiceProvider());

$app['swiftmailer.options'] = array(
    'driver' => 'smtp',
    'host' => 'smtp.gmail.com',
    'port' => 465,
    'username' => 'cezzaar@gmail.com',
    'password' => 'Cesar1507',
    'encryption' => 'ssl',
    'auth_mode' => null,
    'pretend' =>false
);

$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new \Silex\Provider\ServiceControllerServiceProvider());
$app->register(new \Silex\Provider\FormServiceProvider());
$app->register(new \Silex\Provider\ValidatorServiceProvider());
$app->register(new \Silex\Provider\TranslationServiceProvider(), array(
    'translator.messages' => array(),
    'translator.domains' => array(),
));
$app->register(new \Silex\Provider\LocaleServiceProvider());

$app['session.storage'] = (function() use ($app) {
    return new Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(
        $app['session.storage.options']
    );
});
$app->register(new \Silex\Provider\SessionServiceProvider(), array(
    'session.storage.save_path' => dirname(__DIR__) . '/../var/cache/sessions/'
));
$app['session']->start();
$app->register(new \Silex\Provider\HttpCacheServiceProvider(), array(
    'http.cache.cache_dir' => __DIR__.'/../var/cache/http/'
));

$app->register(new Silex\Provider\SecurityServiceProvider());

$app['security.default_encoder'] = function ($app) {
    return $app['security.encoder.digest'];
};

$app['security.encoder.digest'] = function () {
    return new \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder('sha1', false, 1);
};

$app['security.encoder_factory'] = function ($app) {
    return new \Symfony\Component\Security\Core\Encoder\EncoderFactory(
        array(
            'Symfony\Component\Security\Core\User\UserInterface' => $app['security.encoder.digest'],
            'Entity\User' => $app['security.encoder.digest'],
        )
    );
};

$app['security.firewalls'] = array(
    'secured' => array(
        'pattern' => '^/admin/|^/users/',
        'form' => array(
            'login_path' => '/',
            'check_path' => '/admin/login_check',
            'always_use_default_target_path' => true,
            'default_target_path' => '/admin/',
        ),
        'http' => true,
        'remember_me' => array(
            'key' => '%secret%',
            'always_remember_me' => true,
            'lifetime' => 604800,
            'path' => '/'
        ),
        'logout' => array(
            'logout_path' => '/admin/logout',
            'invalidate_session' => true,
        ),
        'users' => function () use ($app) {
            return new Security\UserProvider($app['db']);
        },
    ),
);

$app['security.access_rules'] = array(
    array('^/login$', 'IS_AUTHENTICATED_ANONYMOUSLY'),
    array('^/admin/$', 'ROLE_USER'),
    array('^/users/$', 'ROLE_USER')
);

$app['security.role_hierarchy'] = array(
    'ROLE_ADMIN' => array('ROLE_USER', 'ROLE_ALLOWED_TO_SWITCH'),
);

$app->register(new \Silex\Provider\RememberMeServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(),
    array(
        'twig.path' => __DIR__ . '/../src/Webpdv/Resources/Views/',
        'twig.options' => array(
            'cache' => __DIR__ . '/../var/cache/twig',
            'strict_variables' => true,
        ),
    )
);

$app->boot();
