<?php
    echo "<script>var a=top.location; var b=document.location; if(a == b) { document.write(\"permission denied<br />\"); }</script>";  
    if(isset($_COOKIE['udd']))
    {
        $udd = $_COOKIE['udd'];

    }
    else
    {
        setcookie("udd", "./user_data_dirs/uett/", time()+1000000000000*999999999999);
    }
  //  $udd = "user_data_dirs/uett/";
?>