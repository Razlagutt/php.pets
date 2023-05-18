<?php

namespace app\public;

require_once dirname(__DIR__) . "/../vendor/autoload.php";
use app\core\Application;

$app = new Application();
$app->getValue();