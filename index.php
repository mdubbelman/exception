<?php

require 'vendor/autoload.php';

dump(new \MD\Exception\ApplicationException('A new exception'));
echo "\n<br>@".__FILE__.':'.__LINE__ . PHP_EOL;
die;
