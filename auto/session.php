<?php
session_start();
function set_session($key,$message){
    $_SESSION['flash'][$key]=$message;
}
function get_flash($key){
    $array=$_SESSION['flash'][$key];
    unset($_SESSION['flash'][$key]);
    return $array;
}
