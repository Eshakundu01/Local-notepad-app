<?php

require_once 'config/confidentials.php';

spl_autoload_register(function($className) {
  require_once 'system/' . $className . '.php';
});

// Initialized the route object
$routeObj = new Route();
