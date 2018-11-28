<?php

require 'vendor/autoload.php';

dump(new \MD\Exception\ApplicationException('ERRORRRRR'));
echo "\n<br>@".__FILE__.':'.__LINE__ . PHP_EOL;
die;