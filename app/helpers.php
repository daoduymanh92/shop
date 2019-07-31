<?php
use App\Category;

if (! function_exists('test')) {
    function test($key, $default = null) {
        return $key;
    }
}

if (! function_exists('menu')) {
    function menu() {
        $categories = Category::where('status', Category::ACTIVE)
        						->orderBy('menu_order', 'ASC')
        						->get();

        return $categories;
    }
}