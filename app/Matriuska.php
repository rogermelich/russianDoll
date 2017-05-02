<?php

namespace App;


use Cache;

class Matriuska
{

    protected static $key;

    public static function setUP($model)
    {
        ob_start();
        static::$key = $model->getCacheKey();

    }

    public static function tearDown($model)
    {
        $html = ob_get_clean();
        return Cache::has(static::$key);
    }

}