<?php

include_once __DIR__.'/../src/controller/HomeController.php';

$app->get('/',
    'camafret\controller\HomeController::index_action')
    ->bind('index');

// La page devis
$app->get('/devis',
    'camafret\controller\HomeController::devis_action')
    ->bind('devis');

// La page services
$app->get('/services',
    'camafret\controller\HomeController::services_action')
    ->bind('services');

// La page contact
$app->get('/contact',
    'camafret\controller\HomeController::contact_action')
    ->bind('contact');

// La page qui_sommes_nous
$app->get('/qui_sommes_nous',
    'camafret\controller\HomeController::qui_sommes_nous_action')
    ->bind('qui');