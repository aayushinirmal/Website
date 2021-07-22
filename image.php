<?php
session_start();
$num1=rand(1,10);
$num2=rand(1,10);
$oper=array("+","-","*");
$index=rand(0,count($oper)-1);
$final=$oper[$index];
$answer=0;
switch($final)
{
    case "+":
        $answer=$num1+$num2;
        break;
    case "-":
        $answer=$num1-$num2;
        break;
    case "*":
        $answer=$num1*$num2;
        break;
        
        
}
$_SESSION["ans"]=$answer;


?>
<form method="post" action= "second.php">
   
	<center><?php   echo $num1." ".$final." ".$num2."="  ?></center>

<input type="number" name="fanswer">
    <input type="submit" value="submit">

</form>