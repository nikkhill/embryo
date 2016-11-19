<?php
    // configuration
    require("../includes/config.php"); 

    //get the user id
    $peid = $_GET["peid"];
    $info = query("SELECT * FROM proposed_event WHERE peid = $peid");
    $name = query("SELECT name FROM speaker,proposed_event WHERE proposed_event.peid = $peid and speaker.sid=proposed_event.sid");
    render("proposed_event_details_display.php", ["title" => "Proposed Event Details", "info" => $info, "name" => $name]);
?>
