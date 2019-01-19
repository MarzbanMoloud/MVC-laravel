<?php

//After install composer don't need require classes in bootstrap.php
//because autoload.php will load all class in project!
require 'vendor/autoload.php';
require 'core/bootstrap.php';


require Router::load('routes.php')
                ->direct(Request::uri(), Request::method());
