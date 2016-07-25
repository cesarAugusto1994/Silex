<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 05/07/16
 * Time: 16:16
 */

namespace Webpdv\Services;

use Webpdv\Entities;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

/**
 * Class UserService
 * @package Webpdv\Services
 */
class UserService
{
    /**
     * @var Application
     */
    private $app;

    /**
     * UserService constructor.
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @param Request $request
     * @return Entities\User
     */
    public function createUser(Request $request)
    {
        $encoder = $this->app['security.encoder.digest'];
        $password = $encoder->encodePassword($request->get('form')['password'], '');

        $loja = $this->app['loja.repository']->find(1);
        $cargo = $this->app['cargo.repository']->find(1);

        $user = new Entities\User();
        $user->setUsername($request->get('form')['name']);
        $user->setEmail($request->get('form')['email']);
        $user->setLoja($loja);
        $user->setCargo($cargo);
        $user->setLogin($request->get('form')['email']);
        $user->setPassword($password);
        $user->setCreated(new \DateTime('now'));
        $user->setActive(true);
        try {
            $this->app['user.repository']->save($user);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
        return $user;
    }
}