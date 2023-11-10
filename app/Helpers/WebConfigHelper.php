<?php

if (!function_exists('getWebConfiguration')) {
    function getWebConfiguration()
    {
        return \App\Models\WebConfiguration::first();
    }
}
