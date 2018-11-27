<?php

use InakaPhper\SelectChair\SelectChair;

require __DIR__.'/../vendor/autoload.php';

echo new SelectChair($argv[1]) ."\n";