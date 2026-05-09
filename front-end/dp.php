<?php
$connection  =  mysqli_connect("localhost","root","","ai_chat_bot");

if($connection == true){
    echo "connected";
}
else{
    echo "not connected";
}



?>