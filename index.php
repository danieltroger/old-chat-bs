<h1>Index of <?php $cd = $_SERVER['REQUEST_URI']; ; echo $cd; ?></h1><?php echo "\n\n"; ?>
<br /><?php echo "\n\n"; ?><hr />
<br /><?php echo "\n\n"; ?>
<?php

    $d = '$thisdir/' ;
    $thisdir = getcwd();
    if ($handle = opendir($thisdir . "")) {
        
        
       while (false !== ($entry = readdir($handle))) {
           
            $finfo = finfo_open(FILEINFO_MIME_TYPE) ;
            $finfo = finfo_file($finfo, $entry);
           $t = "title=\"$finfo\"";
            if($finfo == "directory")
    {
          
            echo "<img onclick=\"top.location=('$entry');\" $t src=\"../../../icons/folder.gif\" />";
    }
            elseif($finfo == "image/gif")
           {
               
               echo "<img onclick=\"top.location=('$entry');\" $t src=\"../../../icons/image2.gif\" />";
           }
           elseif($finfo == "application/octet-stream")
           {
               echo "<a onclick=\"top.location=('$entry');\" $t><font color='blue'>H</font></a>";
               
           }
           elseif($finfo == "text/plain" || $finfo == "text/html")
           {
               echo "<img onclick=\"top.location=('$entry');\" $t src=\"../../icons/text.gif\" />";
               
           }
           elseif($finfo == "image/jpeg" || $finfo == "image/jpg"|| $finfo == "image/tiff"|| $finfo == "image/png")
           {
               echo "<img onclick=\"top.location=('$entry');\" $t src=\"../../icons/image2.gif\" />";
               
           }
           elseif($finfo == "application/pdf")
           {
               echo "<img onclick=\"top.location=('$entry');\" $t src=\"../../icons/pdf.gif\" />";
               
           }
           elseif($finfo == "application/zip")
           {
               echo "<img onclick=\"top.location=('$entry');\" $t src=\"../../icons/compressed.gif\" />";
               
           }

                else
                {
                    echo "<img onclick=\"top.location=('$entry');\" $t src=\"../../icons/unknown.gif\" />";
                    
                    //icons/unknown.gif
                }
               
                
                echo "\n<a href=\"$entry\" $t >$entry</a><br />\n\n";
            
       }
    }
        
        closedir($handle);
        
        
  

    ?><br /><hr /><br />
<?php echo $_SERVER['SERVER_SIGNATURE']; ?>

<br />
<br />