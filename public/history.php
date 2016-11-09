<?php

    // configuration
    require("../includes/config.php"); 

    $rows = query("SELECT * FROM history WHERE id = {$_SESSION["id"]}");         
    //query("INSERT INTO history (id, symbol, type, shares, price) VALUES({$_SESSION["id"]}, '$sym', {$_POST["shares"]})");  

    render("history_display.php", ["title" => "History", "rows" => $rows]);

?>
