<?php

namespace PlugRoute\Helpers;

class ValidateHelper
{
    /**
     * Verify if two values are equals.
     *
     * @param $route
     * @param $url
     * @return bool
     */
    public static function isEqual($route, $url)
    {
        $chekLastCaracter['url'] = substr($url, -1);
        $chekLastCaracter['route'] = substr($url, -1);

        if($chekLastCaracter['url'] == '/' && $url != '/' && $chekLastCaracter['route'] != '/' ){
            return substr($url, 0, -1) === $route;
        }

        return $route === $url;
    }

    /**
     * Verify if class exist.
     *
     * @param $class
     * @return bool
     */
    public static function classExist($class)
    {
        return class_exists($class) ? true : false;
    }

    /**
     * Verify if method exist.
     *
     * @param $class
     * @param $method
     * @return bool
     */
    public static function methodExist($class, $method)
    {
        return method_exists($class, $method) ? true : false;
    }
}