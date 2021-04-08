<?php
use App\Wcs\Hello;
require_once __DIR__ . '/../vendor/autoload.php';


$hello = new Hello();

echo $hello->talk();

