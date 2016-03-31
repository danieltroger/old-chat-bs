<?php
    //include "u.php";
    include "smile.php";
    $str = '<script>setTimeout("document.location=(\'user_data_dirs/'. $_REQUEST['ud'] . 'mywrite.php\');",5000);</script>';
    $tva = htmlentities(stripslashes($_REQUEST['tva'])) ;
    $tva = nl2br($tva);
    $tva = preg_replace("/[\n\r]/","",$tva); 
    $tva = str_replace(";-)",$zw,$tva);
    $tva = str_replace("(cool)",$cool,$tva);
    $tva = str_replace("8-)",$cool,$tva);
    $tva = str_replace("(rofl)",$rofl,$tva);
    $tva = str_replace("(headbang)",$headbang,$tva);
    $tva = str_replace("(skype)",$skype,$tva);
    $tva = str_replace(":-)",$smile,$tva);
     $tva = str_replace(" p ",$smile,$tva);
    $tre = htmlentities(stripslashes($_REQUEST['ett'])) ;
    $tre = nl2br($tre);
    $tre = str_replace(";-)",$zw,$tre);
      $tre = str_replace(" p ",$smile,$tre);
    $tre = str_replace("(cool)",$cool,$tre);
    $tre = str_replace("8-)",$cool,$tre);
    $tre = str_replace("(rofl)",$rofl,$tre);
    $tre = str_replace("(headbang)",$headbang,$tre);
    $tre = str_replace("(skype)",$skype,$tre);
    $tre = str_replace(":-)",$smile,$tre);

    if(isset($_REQUEST['para']))
    {
    if($_REQUEST['ett'] == "" && $_REQUEST['tva'] == "")
    {
        echo "something went wrong";
    }
    elseif($_REQUEST['ett'] == "")
    {
        $str = '<script>document.location=(\'user_data_dirs/'. $_REQUEST['ud'] . 'mywrite.php#down\');</script>';
        $ett = '<div class="tip right">
        ' . $tva . '
        </div>';

    }
    elseif($_REQUEST['tva'] == "")
    {
        $str = '<script>document.location=(\'user_data_dirs/'. $_REQUEST['ud'] . 'mywrite.php#down\');</script>';
        $ett = '<div class="tip left" style="left:500px;">
        ' . $tre . '
        </div>';
        
    }
        else
        {
            echo "something went wrong"; 
        }
    }
    else
    {
        echo "no paramenters specifed";
    }
$a = /*$udd . */"user_data_dirs/" . $_REQUEST['name'];
 
$b = file_get_contents($a);
$c = preg_replace('/(<!--here-->)/i','
                  ' . $ett . '
                  <br />
<!--here-->',$b) ;
                 /* $d = str_replace("å",$aa,$d);
                  $d = str_replace("ä",$ae,$d);
                  $d = str_replace("ö",$oe,$d);
                  $d = str_replace("ü",$ue,$d);
                  $d = str_replace("ß",$ss,$d);
                  $d = str_replace(" ","",$d);
                  $d = str_replace("Ö","&Ouml;",$d);
                  $d = str_replace("Ä","&Auml;",$d);
                  $d = str_replace("Å","&Aring;",$d);
*/
                  $d = $c;
                  $fh = fopen($a, 'w+') or die("can't open file");
                  fwrite($fh, $d);
                  
                  fclose($fh);
                  if($_REQUEST['close'] == "close")
                  {
                  $str = "<script>top.close();</script>";
                  }
                  echo $str;
                  ?>