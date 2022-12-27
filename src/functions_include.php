<?php

// Don't redefine the functions if included multiple times.

if (false == function_exists('Legolabs\Values\get_values')) {
    require __DIR__ . '/functions/values.php';
}
if (false == function_exists('Legolabs\Values\array_get')) {
    require __DIR__ . '/functions/array.php';
}
if (false == function_exists('Legolabs\Values\register_hook')) {
    require __DIR__ . '/functions/hook.php';
}
if (false == function_exists('Legolabs\Values\get_object')) {
    require __DIR__ . '/functions/objects.php';
}
