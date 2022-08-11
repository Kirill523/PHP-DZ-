<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/auto/session.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/auto/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/auto/regest.php';
$email= trim(htmlspecialchars($_POST['email'])) ;
$password = trim(htmlspecialchars($_POST['password'])) ;
$fullname=trim(htmlspecialchars($_POST['fullname']));
$text=trim(htmlspecialchars($_POST['text'])) ;
if($password !== $_POST['password2']){
    set_session('error', 'Пароли не совпадают');
    header('Location: /auto/regest.php');
    exit();
}
$sql="INSERT INTO `users` (`email`,`password`,`fullname`,`text`)
        VALUES ('$email','$password','$fullname','$text')";
        if($connect->query($sql)){
            set_session('success', 'Пользователь успешно зарегестрирован');
            header('Location: /auto/index.php');
            exit();
        }