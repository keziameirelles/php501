<?php

require_once 'controllers/landing.php';
require_once 'models/landing';

use controllers\landing as Controllerslanding;
use models\landing as ModelsLanding;
use models\Data;

$landing = new Controllerslanding;
$landing->get_landing();

$landingmodel = new ModelsLanding;
$landingmodel->get_landingmodel();

$data = new Data;
$data->get_data();

