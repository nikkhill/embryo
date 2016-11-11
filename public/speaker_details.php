<?php
    // configuration
    require("../includes/config.php"); 

    //get the user id
    $id = $_GET["sid"];
    $info = query("SELECT * FROM speaker WHERE sid = $id");
    $contact = query("SELECT Phone_no FROM speaker_contact_info WHERE sid = $id");
    render("speaker_details_display.php", ["title" => "Details", "info" => $info, "contact" => $contact]);
?>
