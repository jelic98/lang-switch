<?php
    //find out what is choosen language
    require("logic/get_lang.php"); 

    //print array element
    echo $string["home"];
    echo "<br/>";

    //print matrix element
    echo $string["contact"]["name"];
    echo "<br/>";

    //print file content
    echo $string["story"];
    echo "<br/>";
        
    //get current page name
    $page = basename($_SERVER["SCRIPT_FILENAME"], '.php');

    //add switch
    if(strcmp($lang, "en") == 0) {
        echo '<a href="logic/set_lang.php?lang=rs&page=' . $page . '">RS</a>';
    }else if(strcmp($lang, "rs") == 0) {
        echo '<a href="logic/set_lang.php?lang=en&page=' . $page . '">EN</a>';                   
    }
?>