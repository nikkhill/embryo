<?php

    // configuration
    require("../includes/config.php"); 

    // echo "Hi!", $_SESSION["id"];
    // $rows = query("SELECT * FROM allbooks WHERE id = {$_SESSION["id"]}");
    
    // $positions = [];
    // foreach ($rows as $row)
    // {    
    //     $positions[] = [
    //         "name" => $row["name"],
    //         "author" => $row["author"],
    //         "price" => $row["price"]
    //     ];        
    // }
    // // render portfolio
    // if (empty($rows))
    // {
    //     render("emptyhome.php", ["title" => "Add Books you want to sell"]);
    // }
    // else
    // {
    render("home.php", ["title" => "Home"]);
    // }
    
?>
