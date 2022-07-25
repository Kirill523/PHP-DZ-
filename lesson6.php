<form action="" method="post">
<input type="text" name="square" placeholder="Введите площадь помещения">
<input type="text" name="power" placeholder="Введите мощность 1 секции">
<button type="submit">Расчитать</button>
</form>
<?php
$pom=$_POST['square'];
$powerr=100/$_POST['power'];
$calk=ceil(($pom/100)*$powerr);
echo "Необходимо $calk секций радиатора"
  ?>
  <form action="" method="get">
<input type="text" name="slov" placeholder="Введите фразу">
<button type="submit">Отправить</button>
</form>
<?php
$text='Текст-зафиксированная на каком-либо материальном носителе человеческая мысль;';
echo $text;
foreach($_GET as $word){
    $mass=explode(" ",$word);
}
foreach($mass as $numb=>$wordd){
    $text=str_replace($wordd,"<span style=\"color:red\">$wordd</span>",$text);
}
echo "<br>$text";
?>
<form action="" method="get">
<input type="text" name="login" placeholder="Введите логин">
<input type="text" name="password" placeholder="Введите пароль">
<button type="submit">Войти</button>
</form>
<?php
$login='Ivan';
$password='Ivan';
$firstname="Иван";
if($_GET["login"]===$login&&$_GET["password"]===$password){
    $_SESSION["login"]=$login;
    $_SESSION["firstname"]=$firstname;
    echo "<H1>Добрый день,$firstname</H1>";
    ?>
 <form method="POST" action="">
    <button name="esc"type="submit">Выйти</button>
 </form>
   <?php
if(isset($_POST["esc"])){
    unset($_SESSION["login"]);
    unset($_SESSION["firstname"]);
header('Location: http://lesson.local/lesson6.php');
}
}else{
    
}
?>