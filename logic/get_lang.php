<?php 
    session_start();
    $lang_found = false;

    //check if language is choosen
    if(isset($_SESSION["lang"])) {
        $lang = $_SESSION["lang"];
        $file = "text/" . $lang . ".php";
        
        //check if file with strings exists
        if(file_exists($file)) {
            require($file); 
            $lang_found = true;
        }   
    }

    //set default language
    if(!$lang_found) {
        $lang = "en";
        require("text/" . $lang . ".php");   
    }
?>