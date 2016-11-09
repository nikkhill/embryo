<?php

    // configuration
    require("../includes/config.php"); 

    $rows = query("SELECT * FROM allbooks");         

    render("buy_form.php", ["title" => "All Books", "rows" => $rows]);

?> 
