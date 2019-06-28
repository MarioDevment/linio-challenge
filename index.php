<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use MarioDevment\Linio\Challenge;

$challenge = new Challenge();
print json_encode($challenge(), JSON_PRETTY_PRINT);