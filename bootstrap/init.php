<?php
const BASEPATH = __DIR__. "/../";
include BASEPATH."vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH);
$dotenv->load();

include BASEPATH."helpers/helpers.php";
