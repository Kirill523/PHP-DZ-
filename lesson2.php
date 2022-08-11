wwad
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php


// function sum_nums(...$nums){
//     $sum=0;
//     foreach($nums as $num){
//         $sum+=$num;
//     }
//     return $sum;
// }
// function sred_nums(...$nums){
// $kol=0;
// $sum=0;
// foreach($nums as $num){
//     $sum+=$num;
//     $kol++;
// }
// $sredn=$sum/$kol;
// return $sredn;
// }

function type($c,$d){
 if(gettype($c)==='integer'&&gettype($d)==='integer'){
    return$c+$d;
 }else{
    return $c.$d;
 }
}
 echo type(true,true);

?>
</body>
</html>

