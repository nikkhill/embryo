<?php
    
    require('../includes/config.php');

    if ($_SERVER["REQUEST_METHOD"] == "GET") 
    {
        query("UPDATE proposed_event set confirmation_status='Rejected' WHERE peid=?", $_GET["peid"]);
    }

    redirect("index.php");

?>