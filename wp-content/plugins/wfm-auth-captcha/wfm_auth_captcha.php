<?php
/*
Plugin Name: Простая капча для формы авторизации
Plugin URI: http://#
Description: Плагин добавляет простую проверку на человечность к форме авторизации
Version: Номер версии плагина, например: 1.0
Author: Андрей
Author URI: http://#
*/

/*add_filter('login_errors', 'my_login_errors');

function my_login_errors(){
    return 'Ошибка авторизации';
}*/

//add_action('login_form' , 'wfm_captcha_login');
//add_action('wp_authenticate','wfm_authenticate', 10 , 2);
//
//function wfm_captcha_login(){
//    echo '<p><label><input type="checkbox" name="check" id="check" value="check" checked> Снимите галочку</label></p>';
//}
//
//function my_login_errors(){
//    return 'Вы не прошли на проверку на человечность';
//}
//
//function wfm_authenticate($username, $password)
//{
//    if (isset($_POST['check']) && $_POST['check'] == 'check') {
//        //wp_die('<b>Ошибка</b>: вы не прошли на проверку на человечность');
//        add_filter('login_errors', 'my_login_errors');
//        $username = null;
//    }
//}

add_action('login_form' , 'wfm_captcha_login');
add_filter('authenticate', 'wp_auth_signon', 10, 3);

function wp_auth_signon($user, $username, $password){
    if (isset($_POST['check']) && $_POST['check'] == 'check') {
        $user = new WP_Error('broken', '<b>Ошибка</b>: вы бот?');
    }
    if( isset( $user->errors['invalid_username'] ) || isset( $user->errors['incorrect_password'] ) ){
        return new WP_Error('broken', '<b>Ошибка</b>: неверный логин/пароль');
    }
    return $user;
}

function wfm_captcha_login(){
    echo '<p><label><input type="checkbox" name="check" id="check" value="check" checked> Снимите галочку</label></p>';
}
