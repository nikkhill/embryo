<?php
    // configuration
    require("../includes/config.php"); 
    
    query("DELETE FROM history WHERE id = {$_SESSION["id"]}");
    
    redirect("index.php");
