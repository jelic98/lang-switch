<?php 
    session_start();
    $_SESSION["lang"] = $_GET["lang"];

    //redirect user to current page
    header("location: ../" . $_GET["page"] . ".php");
?>