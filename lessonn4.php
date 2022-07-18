<?php
//Царь горы 
$name=[
    "Вася"=>100,
    "Петя"=>80,
    "Максим"=>10,
    "Иван"=>50
];
arsort($name);
print_r($name);

if(count($name)>3){
array_pop($name);
}
print_r($name);
//День недели
$text="Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday";
$week=["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
$weekR=["Понедельник","Вторник","Среда","Четверг","Пятница","Суббота","Воскресенье"];
$textRepl=str_replace($week,$weekR,$text);
echo($text)."<br>";
echo($textRepl)."<br>";
//Лето
$month="Июнь";
$months=["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"];
$i=0;
while($months[$i]!==$month){
$i++;
}
if($i===11|| $i<=1){
    echo "Зима";
}elseif($i<=4){
    echo"Весна";
}elseif($i<=7){
    echo "Лето";
}else{
    echo"Осень";
}
//Корзина
$cart=[13=>['name'=>'Кеды','count'=>2,'price'=>123],28=>['name'=>'Самолет','count'=>1,'price'=>9999999]];
$id=13;
if(isset($cart[$id])){
    echo"<br>".($cart[$id]['price']);
}else{
    echo"Данные не найдены ";
}


?>
