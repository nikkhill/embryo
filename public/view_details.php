<?php
    // configuration
    require("../includes/config.php"); 

    //get the user id
    $id = $_GET["key"];
    $info = query("SELECT * FROM users WHERE id = $id");
    render("view_info.php", ["title" => "Contact Details", "info" => $info]);
?>
