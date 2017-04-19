<?php

if (!function_exists('env')) {
    function env($key, $default = null) {
        $value = getenv($key);
        if ($value === false) {
            return $default;
        }
        switch (strtolower($value)) {
            case 'true' :
                return true;
            case 'null' :
                return;
            default:
                return $value;
        }
    }
}