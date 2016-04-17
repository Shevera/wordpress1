<?php
/*
1Plugin Name: Первый плагин
Plugin URI: http://#
Description: Описание первого плагина
Version: Номер версии плагина, например: 1.0
Author: Андрей
Author URI: http://#
*/

include dirname(__FILE__). '/deactivate.php';

register_activation_hook(__FILE__, 'wmf_activate');
register_deactivation_hook(__FILE__, 'wmf_deactivate');
register_uninstall_hook(__FILE__, 'wmf_unistall');

function wmf_unistall(){
    wp_mail( get_bloginfo( 'admin_email' ) , 'Плагин удален' , 'Произошла успешное удаление плагина' );
}


function wmf_activate(){
    wp_mail( get_bloginfo( 'admin_email' ) , 'Плагин активирован' , 'Произошла успешная активация плагина' );
}



//register_activation_hook(__FILE__, function(){
//    wp_mail( get_bloginfo( 'admin_email' ) , 'Плагин активирован' , 'Произошла успешная активация плагина 2' );
//});

//register_activation_hook(__FILE__, 'wmf_activate');
//
//function wmf_activate(){
//   if(version_compare(PHP_VERSION, '5.8.0' , '<')){
//       header("Content-type: text/html; Charset=utf-8");
//       exit('ДЛя работы нужна версия пхп >= 5.8.0');
//   }
//}

//class WFMActivate{
//    function __construct()
//    {
//        register_activation_hook(__FILE__, array($this, 'wmf_activate'));
//    }
//
//        function wmf_activate(){
//            $date = "[" . date("Y:m:d H:i:s") . "] ";
//            error_log($date . "Плагин активирован\r\n", 3, dirname(__FILE__) . '/wfm_errors_log.log');
//        }
//
//}
//
//$wfm_activate = new WFMActivate();

//class WFMActivate{
//    static function wmf_activate(){
//        $date = "[" . date("Y:m:d H:i:s") . "] ";
//        error_log($date . "Плагин активирован\r\n", 3, dirname(__FILE__) . '/wfm_errors_log.log');
//
//    }
//}
//
//register_activation_hook(__FILE__, array('WFMActivate',  'wmf_activate'));


