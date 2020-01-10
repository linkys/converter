<?php

if(!function_exists('view')) {
    function view($path) {
        $view = "app/Views/{$path}.php";

        if(file_exists($view)) {
            return include $view;
        } else {
            throw new Exception('View file is not exist');
        }
    }
}

if(!function_exists('request')) {
    function request($key = null) {
        if(!empty($key) && !empty($_REQUEST[$key])) {
            return htmlentities($_REQUEST[$key], ENT_QUOTES, 'utf-8');
        }

        return null;
    }
}

if(!function_exists('response')) {
    function response(array $data = null) {
        print json_encode($data, JSON_FORCE_OBJECT);
        die;
    }
}