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
    width: 100px;
}
td{
    background-color: white;
}
.black{
    background-color: black;
}
.green{
    background-color: green;
    color: yellow;
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

?>