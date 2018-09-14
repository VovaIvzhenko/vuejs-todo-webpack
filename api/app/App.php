<?php

namespace app;

use routes\Router;

class App
{
    public function __construct()
    {
        if (PHP_SAPI !== 'cli') {
            new Router();
        }
    }

    public static function decode($val, $assoc = true) {
        return json_decode(base64_decode($val), $assoc);
    }

    public static function encode($val, $assoc = true) {
        return json_encode(base64_encode($val), $assoc);
    }
}