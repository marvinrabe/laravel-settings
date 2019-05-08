<?php

use MarvinRabe\LaravelSettings\Setting;

if (!function_exists('setting')) {
    /**
     * @param string $key
     * @param mixed $default
     * @return Setting|mixed
     */
    function setting($key = null, $default = null)
    {
        $settings = app(Setting::class);

        if ($key) {
            return $settings->get($key, $default);
        }

        return $settings;
    }
}
