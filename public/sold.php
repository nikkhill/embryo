<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["name"]))
        {
            apologize("You must provide a BOOK.");
        }
        
        
        
        else
        {               
            if(query("DELETE FROM allbooks WHERE id = {$_SESSION["id"]} AND name = '{$_POST["name"]}'") === false)
            {
                apologize("You didn't put this book for sale.");
            }          
            redirect("index.php");           
        }
    }
    else
    {
        $yourshares = query("SELECT * FROM allbooks WHERE id = {$_SESSION["id"]}");
        render("sold_form.php", ["title" => "If sold, delete the books", "yourshares" => $yourshares]);
    }
    

?>
