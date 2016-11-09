<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["symbol"]))
        {
            apologize("You must provide a SYMBOL.");
        }
        
        else
        {
            
            $stock = lookup($_POST["symbol"]);
            //redirect("index.php");
            //render display
            render("quote_display.php", ["title" => "Lookup", "stock" => $stock]);
        }
    }
    
    else
    {
        render("quote_form.php", ["title" => "Quote"]);
    }
    
?>
