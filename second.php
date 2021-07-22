<?php
session_start();

if(isset($_SESSION["ans"]) && $_POST["fanswer"])
{
if($_SESSION["ans"]==$_POST["fanswer"])
{
    
    
    echo"answer submitted sucessfully"
	

}

else
{
    echo "not valid";
    header('Location: image.php');
}
    
    
}
else
{
    echo  "  wrong .url";
  header('Location: image.php');
}

?>