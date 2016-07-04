<?php
    //$directory = "img/";

    //$images = glob("" . $directory . "*.jpg");

    foreach(glob('/userweb/bclary/public_html/WebDev/testphp/img/*.jpg' as $image){ $imgs[] = "$image"; }
            
    foreach($imgs as $img){
    echo "<img src='$img' />";
    }
?>

