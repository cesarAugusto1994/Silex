<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 16/07/16
 * Time: 11:38
 */

namespace Application\Controller;

use Application\Entity\Cargo;
use Application\Entity\CargoRepository;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class CargoController
{
    /**
     * @var Application
     */
    private $app;
    /**
     * @var CargoRepository
     */
    private $cargoRepository;

    /**
     * CargoController constructor.
     * @param CargoRepository $cargoRepository
     * @param Application $app
     */
    public function __construct(CargoRepository $cargoRepository, Application $app)
    {
        $this->app = $app;
        $this->cargoRepository = $cargoRepository;
    }

    /**
     * @param Request $request
     */
    public function create(Request $request)
    {
        if($request->get('nome')) {

            $cargo = new Cargo();
            $cargo->setNome($request->get('nome'));
            $cargo->setAtivo(true);

            $this->cargoRepository->save($cargo);
        }

        return $this->app['twig']->render('users/cargos.twig', ['cargos' => $this->cargoRepository->findAll()]);
    }
}