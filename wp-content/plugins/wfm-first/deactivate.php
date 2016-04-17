<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 07.04.2016
 * Time: 16:37
 */

function wmf_deactivate(){
    $date = "[" . date("Y:m:d H:i:s") . "] ";
    error_log($date . "Плагин деактивирован\r\n", 3, dirname(__FILE__) . '/wfm_errors_log.log');
}