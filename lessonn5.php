<?php
//Экватор
$ranks=[
    'Вася'=>37,
    'Даша'=>56,
    'Катя'=>12,
    'Петя'=>60,
];
foreach($ranks as $name=>$rank){
    if($rank>50){
        echo $name." ". $rank ."<br>";
   };
};
//Данила мастер2
$rankss=[
    'Данила'=>60,
    'Даша'=>56,
    'Катя'=>12,
    'Петя'=>61,
];
foreach($rankss as $namee=>&$rankk){
    if($rankk<=30){
        $rankk='Новичок';
    }elseif($rankk<=60){
        $rankk='Мастер';
    }else{
        $rankk='Грандмастер';
    }
};
print_r($rankss); 
//Выйди вон
echo"<br>";
$name1=[
    'Данила',
    'Даша',
    'Катя',
    'Петя',
];
$name2=[
    'Вася',
    'Даша',
    'Катя',
    'Петя',
];
print_r(array_diff($name1,$name2)) ;
// Зебра
?>
<table border="1">
<style>
table{
    width: 500px;
}
td{
    background-color: white;
}
.black{
    background-color: black;
}
.white{
    background-color: white;
    width: 50px;
    height: 50px;
}
.green{
    background-color: green;
    color: yellow;
    
}
.days{
    background-color: salmon;
    width: 50px;
    height: 50px;
}
.currentdays{
    background-color: red;
    width: 50px;
    height: 50px;
}
.weekend{
    background-color: salmon;
    width: 50px;
    height: 50px;
    color: white;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
</style>
<?php
$row_count=20;
for($i = 1;$i <= $row_count;$i ++){
if($i%2===0){
    echo"<tr><td class=\"black\"></td></tr>";
}else{
    echo"<tr><td></td></tr>";
}
}
// Меню и Меню 2
?>
<table border="1">
    <tr>
        <th>Название страницы</th>
        <th>Ссылка на страницу</th>
    </tr>
<?php
$pages=['О нас'=>'about.html','Главная'=>'main.html','Контакты'=>'contacs.html','Загрузки'=>'downloads.html'];
$page='Главная';
foreach($pages as $namePage=>$linkPage){
    if(isset($pages[$page])){
        if($namePage===$page){
            ?>
        <tr>
         <td class="green"><?=$namePage?></td>
         <td><?=$linkPage?></td>
         </tr>
         <?php
        }else{
            ?>
            <tr>
         <td><?=$namePage?></td>
         <td><?=$linkPage?></td>
         </tr>
         <?php
        }
    }else{
        ?>
        <tr>
     <td><?=$namePage?></td>
     <td><?=$linkPage?></td>
     </tr>
     <?php
    }
    
}
//Итог
$cart=[
    13=>['name'=>'Кеды','count'=>2,'price'=>123],
    28=>['name'=>'Самолёт','count'=>1,'price'=>9999999]
];
$totalPrice=0;
?>
<table border="1">
    <tr>
        <th>Название товара</th>
        <th>Цена</th>
        <th>Кол-во</th>
    </tr>
<?php
foreach($cart as $id=>$product):?>
    <tr>
     <td><?=$product['name']?></td>
     <td><?=$product['price']?></td>
     <td><?=$product['count']?></td>
     </tr>
     <tr>
<?php
    $totalPrice+=($product['price']*$product['count']);

endforeach;
?>
     <tr>
     <th>Итоговая стоимость</th>
     <td><?=$totalPrice?></td>
     </tr>
     </table>
<?php
//Шах

    echo '<table border="1">';
    for($row=1;$row<=6;$row++){
        echo "<tr></tr>";
        for($col=1;$col<=6;$col++) {
            if(($row+$col) % 2 == 0) {
                echo "<td class=\"white\"></td>";
            } else {
                echo "<td class=\"black\"></td>";
            }
        }
     
    }
    echo '</table>';
//Мат
echo '<table align="center" border="1">';
$numDay=1;
$nummDay=27;
$currentDay=11;
$weekend=0;
for($day=0;$day<=4;$day++){
    echo "<tr ></tr>";
    for($day2=0;$day2<=6;$day2++){
        $weekend++;
        if($weekend===8){
            $weekend=1;
        }
        if($nummDay<=30){
            echo "<td class=\"days\"></td>";
            $nummDay++;
        }elseif($numDay<=31){
            if($numDay===$currentDay){
                echo "<td align=\"center\" class=\"currentdays\">$numDay</td>";
            }elseif($weekend===6||$weekend===7){
                echo "<td align=\"center\" class=\"weekend\">$numDay</td>";
            }else{
                echo "<td align=\"center\" class=\"days\">$numDay</td>";
            }
            $numDay++;
        }else{
            echo "<td class=\"days\"></td>";
        }
    }
}
 ?>

 
 