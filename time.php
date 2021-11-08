<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$dt = Carbon::now();
echo $dt->addYear();

$dt = Carbon::now();
echo $dt->subYear();