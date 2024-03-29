<?php
// Start session
session_start();

// Include config and Bootstrap
require 'config.php';
require 'classes/bootstrap.php';
require 'classes/Controller.php';
require 'classes/Model.php';
require 'classes/Message.php';

require 'controllers/Home.php';
require 'controllers/Users.php';
require 'controllers/Shares.php';

require 'models/Home.php';
require 'models/User.php';
require 'models/Share.php';

$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();
if ($controller) {
    $controller->executeAction();
}
