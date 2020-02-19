<?php

return [
    'tmppath'     => '/var/www/html/storage/tmp/',
    'debug'       => env('APP_DEBUG_PDF', false),
    'binpath'     => '/usr/bin/',
    'binfile'     => 'xvfb-wkhtmltopdf',
    'output_mode' => 'I',
];
