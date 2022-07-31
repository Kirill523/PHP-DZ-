<?php
//5.
function mediana(...$nums){
    if (count($nums)%2===0){
        $sred1=(count($nums)/2)-1;
        $sred2=$sred1+1;
       $medianaNum=($nums[$sred1]+$nums[$sred2])/2;
    }else{
       $medianaNum=$nums[(count($nums)/2)];
    }
    echo $medianaNum;
}
mediana(1,2,3,4,5,6,7);
//6.
function schet_func(){
  static $schet=0;
    $schet++;
   echo "<br>".$schet;
}
schet_func();
schet_func();
schet_func();
//7.
// $a=sum(5);
// $b=sum(2);
function sum($num){
static $f=0;
$f++;
static $g=0;
if($f===1){
    $g=$num;
    return $num;
}else{
return $g+$num;
}
}
echo "<br>".$a." ".$b;
//8
$c=sred_arif(5);
$d=sred_arif(2);
function sred_arif($num){
    static $f=0;
    $f++;
   return sum($num)/$f;
}
echo"<br>".$c." ".$d;
//9
function sort_nums(...$nums){
    asort($nums);
  echo "<br>".implode(" ",$nums);
}
sort_nums(3,-1,4,1);
//Факториал
function factorials($num){
    $fact=1;
    for($i=1;$i<=$num;$i++){
        $fact*=$i;
    }
    return $fact;
}
 echo "<br>".factorials(9);
 //Простое число
 function prost_num($num){
    for($i=2;$i<$num;$i++){
        if($num%$i ===0){
            echo "<br>Число не простое";
            return 1;
        }
    }
    echo"<br>Число простое";
 }
 prost_num(6);
//Макс2 
function max_num($num1,$num2){
    static $t=0;
    if($t===0){
    if($num1>$num2){
    echo "<br>Число 1 максимальное";
    }else{
    echo "<br>Число 2 максимальное";
    }
    }
    $t++;
    if($num1>$num2){
        return 1;
    }else{
        return 2;
    }
}
max_num(5,3);
//Макс3 
function max_num2($num1,$num2,$num3){
    if (max_num($num1,$num2)===1){
        if(max_num($num1,$num3)===1){
            echo "<br>Число 1 максимальное";
        }else{
            echo "<br>Число 3 максимальное";
        }
    }elseif(max_num($num2,$num3)===1){
        echo "<br>Число 2 максимальное"; 
    }else{
        echo "<br>Число 3 максимальное";
    }
}
max_num2(2,5,1);
//Максимум массива
$massiv=[2,4,5,1,3,10,48,2];
function max_massiv($nums){
   rsort($nums);
    echo "<br>".$nums[0];
}
max_massiv($massiv);
//Почти максимум
$arr=[1,2,2,4];
$u=rsort($arr);
echo $u[0];
function max_elem($massiv){
   $j=array_count_values($massiv);
    $t=0;
    $l=0;
    foreach($massiv as $num){
        if($t<$j[$num]){
            $t=$j[$num];
            $l=$num;
        }
    }
    return $l;
}
echo "<br>".max_elem($arr);
//Значение -ключ


?>