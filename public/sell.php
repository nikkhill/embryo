<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["bname"]))
        {
            apologize("You must provide a NAME for the book.");
        }
        else if (empty($_POST["author"]))
        {
            apologize("You must provide a AUTHOR for the book.");
        }
        else if (preg_match("/^\d+$/", $_POST["price"]) == false)
        {
            apologize("You must enter a positive integer in PRICE.");
        }
        else
        {              
            query("INSERT INTO allbooks (id, name, author, price) VALUES({$_SESSION["id"]}, '{$_POST["bname"]}', '{$_POST["author"]}', {$_POST["price"]})");
            redirect("index.php");           
        }    
    }
    else
    {
        render("sell_form.php", ["title" => "Sell"]);
    }

?>

