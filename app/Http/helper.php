<?php

if (!function_exists('get_cms')) {
    function get_cms($slug, $tag, $property = 'value')
    {

        $cms = \App\Models\web_cms::where('slug', $slug)->where('tag', $tag)->first();

        if (isset($cms)) {
            return $cms->$property;
        }
        return '';
    }
}
