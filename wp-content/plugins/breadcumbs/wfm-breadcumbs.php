<?php
/*
Plugin Name: Хлебные крошки в title
Description: Добавляем полный путь в title страниц. Для корректной работы плагина,
тег title шаблона header.php должен выглядеть так: &lt;title&gt;&lt;?php wp_title(); ?&gt;&lt;/title&gt;
Plugin URI: http://webformyself.com
Author: Андрей
Author URI: http://webformyself.com
*/

add_filter('wp_title', 'wfm_title' , 20);

function wfm_title($title){
    $sep = ' - ';
    $site = get_bloginfo('name');

    //главная страница
    if(is_home() || is_front_page()){

    }

    return $title;
}
