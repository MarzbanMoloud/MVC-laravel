<?php

//After install composer don't need require classes in bootstrap.php
//because autoload.php will load all class in project!
require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\Router;
use App\Core\Request;

require Router::load('app/routes.php')
                ->direct(Request::uri(), Request::method());
