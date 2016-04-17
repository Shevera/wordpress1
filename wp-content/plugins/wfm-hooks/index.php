<?php
/*
1Plugin Name: Примеры работы шуков
Plugin URI: http://#
Description: Несколько примеров рвботы хуков
Version: Номер версии плагина, например: 1.0
Author: Андрей
Author URI: http://#
*/

//add_filter('the_title', 'wfm_title');

//function wfm_title($title){
//    if( is_admin() ) return $title;
//    return mb_convert_case($title, MB_CASE_TITLE ,'UTF-8');
//}

//add_filter('the_title', 'ucwords');

//add_filter('the_title', 'wfm_title');
//
//function wfm_title($title){
//    if( is_admin() ) return $title;
//    return ucwords($title);
//}

//add_filter('the_content', 'wfm_content');
//
//function wfm_content($content){
//    if( is_user_logged_in()) return $content;
//    if (is_page()) return $content;
//    return '<div class="wfm-access"><a href="' . home_url() . '/wp-login.php">Авторизуйтесь для просмотра контента</a></div>';
//
//}

add_action('comment_post' , 'wfm_comment_post');

function wfm_comment_post(){
    wp_mail( get_bloginfo( 'admin_email' ) , 'Новый комментарий на сайте' , 'На сайте появился новый комментарий' );

}