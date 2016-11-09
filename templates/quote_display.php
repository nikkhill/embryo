<?php

    if ($stock === false)
    {
        apologize("You must provide a valid stock.");
    }
    else
    {
        print("A share of " . $stock["name"] . " (" . $stock["symbol"] . ") costs <strong>" . number_format($stock["price"], 4, '.', '') . "</strong>");
    }
    
?>
