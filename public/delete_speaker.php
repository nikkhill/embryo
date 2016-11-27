<?php
    
    require('../includes/config.php');

    if ($_SERVER["REQUEST_METHOD"] == "GET") 
    {
        query("DELETE from speaker WHERE sid=?", $_GET["sid"]);
        query("DELETE from speaker_contact_info WHERE sid=?", $_GET["sid"]);
    }

    redirect("speakers.php");

?>