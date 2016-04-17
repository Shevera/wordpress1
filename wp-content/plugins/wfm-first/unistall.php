<?php

if( ! defined('WP_UNINSTALL_PLUGIN') )
    exit;

wp_mail( get_bloginfo( 'admin_email' ) , 'Плагин удален 2' , 'Произошла успешное удаление плагина #2' );
