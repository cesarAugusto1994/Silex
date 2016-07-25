<?php

/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 19/07/16
 * Time: 10:04
 */

use Webpdv\Controllers\UsuariosController;

/**
 * Class TestUsuariosController
 */
class UsuariosControllerTest extends PHPUnit_Framework_TestCase
{
    public function testGetUsuarios()
    {
        $usuario = new UsuariosController();
        $this->assertNotNull($usuario->getUsuario());
    }

    public function testGetUsuariosDeveRetornarInstanciaUsuarios()
    {
        $usuario = new UsuariosController();
        $this->assertInstanceOf(\Webpdv\Entities\Usuarios::class, $usuario->getUsuario());
    }
}