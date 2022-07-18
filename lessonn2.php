<?php
//Коровы
$string="wd34tbawbaw";
echo $string.";  w встречается ".mb_substr_count($string,"w")." раза <br>";
//Caps Lock
$qwerty="QWERTY123";
if($qwerty==="qwerty123"){
echo "Добро пожаловать! <br>";
}elseif($qwerty==="QWERTY123"){
    echo "Возможно нажата клавиша Caps Lock <br>";
}else{
    echo "Ошибка<br>";
}
//Регистрозависимые Коровы
$stringg="wd34tbaWbawWw";
$stringup=strtoupper($stringg);
echo $stringg.";  W в любом регистре встречается ". mb_substr_count($stringup,"W")." раза <br>";
//Курсив 
$text="У лукоморья дуб зелёный;
Златая цепь на ДУБЕ том:
И днём и ночью кот учёный
Всё ходит по цепи кругом;";
$word="дуб";
$texti=str_replace($word,"<i>$word</i>", mb_convert_case($text,MB_CASE_LOWER,"UTF-8") );
echo $text."<br>". mb_convert_case($texti,MB_CASE_TITLE,"UTF-8")."<br>";
//ТЕГ
$tag="<p>Lorem ipsum dolor.</p>";
$tagg= str_replace("<p>", "",$tag) ;
echo $tagg;
//Без комментариев
$string1="Lorem/*dadafafaw*/ipsum dolor";
$stringn=mb_strpos($string1,"/*");
$stringk=mb_strpos($string1,"*/");
$string2=mb_substr($string1,$stringn,($stringk-$stringn)+2);
$string3=str_replace($string2," ",$string1);
echo $string3;

?>
