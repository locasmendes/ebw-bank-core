<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

if (!function_exists('hexToRgb')) {
    function hexToRgb($hex)
    {
        $hex = str_replace('#', '', $hex);
        $length = strlen($hex);
        $rgb['r'] = hexdec($length == 6 ? substr($hex, 0, 2) : ($length == 3 ? str_repeat(substr($hex, 0, 1), 2) : 0));
        $rgb['g'] = hexdec($length == 6 ? substr($hex, 2, 2) : ($length == 3 ? str_repeat(substr($hex, 1, 1), 2) : 0));
        $rgb['b'] = hexdec($length == 6 ? substr($hex, 4, 2) : ($length == 3 ? str_repeat(substr($hex, 2, 1), 2) : 0));

        return $rgb['r'] . ',' . $rgb['g'] . ',' . $rgb['b'];
    }
}
if (!function_exists('str')) {
    function str($string = null)
    {
        if (func_num_args() === 0) {
            return new class
            {
                public function __call($method, $parameters)
                {
                    return Str::$method(...$parameters);
                }

                public function __toString()
                {
                    return '';
                }
            };
        }

        return Str::of($string);
    }
}

if (!function_exists('text_to_html')) {
    function text_to_html($string = '')
    {
        if ($string === '') {
            return '';
        }
        $text = $string;
        if (Str::containsAll($text, ['**', '**'])) {
            $count = Str::substrCount($text, '**');

            for ($i = 0; $i < $count / 2; $i++) {
                $text = Str::replaceFirst('**', '<b>', $text);
                $text = Str::replaceFirst('**', '</b>', $text);
            }
        }
        if (Str::containsAll($text, ['_', '_'])) {
            $count = Str::substrCount($text, '_');

            for ($i = 0; $i < $count / 2; $i++) {
                $text = Str::replaceFirst('_', '<i>', $text);
                $text = Str::replaceFirst('_', '</i>', $text);
            }
        }
        return $text;
    }
}

if (!function_exists('image_url')) {
    function image_url($path = '')
    {
        if ($path === '') {
            return '';
        }

        if (Str::startsWith($path, 'images/')) {
            return asset($path);
        }

        return asset(Storage::url($path));
    }
}
