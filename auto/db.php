<?php
function dump($value){
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}
$hostname='localhost';
$username='root';
$password='root';
$database='users';
$connect= new mysqli($hostname,$username,$password,$database);

if($connect->connect_errno){
print_r($connect->connect_error);
exit();
}
$sql_select="SELECT * FROM `users`";
$result=$connect->query($sql_select);
