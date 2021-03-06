<?php

// Usage:
// $ php examples/check_passport.php

declare(strict_types=1);

use Damax\Services\Client\Configuration;

require __DIR__ . '/../vendor/autoload.php';

$config = new Configuration('https://api.damax.solutions/services', 'token');

$result = $config
    ->getClient()
    ->checkPassport('74 05 558551')
;

var_dump($result);
