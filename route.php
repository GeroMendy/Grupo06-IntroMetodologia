<?php
    require_once("php/controller.php");
    require_once("php/router.php");
    
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]));
	
    $router = new Router();
    $router->addRoute("mapa/:ID","GET","controller","verMapa");
    


    //Hardcode para testing.
    $router->addRoute("hardcode_testing_addHotel","GET","controller","testingModel_addHotel");

    $router->setDefaultRoute("controller","index");
	
    $router->route($_GET["action"], $_SERVER['REQUEST_METHOD']);
