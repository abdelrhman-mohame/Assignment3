<?php
if(isset($_POST['submit']))
{
    $result= clac($_POST['n1'],$_POST['n2'],$_POST['opr']);
    header("location:calculate.php?result=$result");
}else{
    header("location:calculate.php");
}
function clac (int|float $num1, int|float $num2,string $oper):int|float|string{
    switch($oper){
        case "add":
            return $num1+$num2;
        case "multi":
            return $num1*$num2;
        case "sub":
            return $num1-$num2;
        case "div":
            return $num1/$num2;
        default :
            return "opreation not valid";    
    }
}
?>