<?php namespace camafret\controller;

/**
 * Created by Lapi Emo
 * Date: 02-12-16
 * Time: 00:22
 */

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class HomeController
{
    /**
     * @param Application $app
     * @return accueil.html.twig
     */
    public function index_action(Application $app) {

        return $app['twig']->render('index.html.twig');
    }

    /**
     * @param Application $app
     * @return index.html.twig
     */
    public function contact_action(Application $app) {

        return $app['twig']->render('contact.html.twig');
    }

    /**
     * @param Application $app
     * @return index.html.twig
     */
    public function services_action(Application $app) {

        return $app['twig']->render('services.html.twig');
    }
}