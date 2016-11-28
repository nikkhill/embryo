<?php
    // configuration
    require("../includes/config.php"); 

    //get the user id
    $eid = $_GET["eid"];
    $info = query("SELECT * FROM event WHERE eid = $eid");
    $name = query("SELECT name,speaker.sid FROM speaker,proposed_event,event WHERE event.peid = proposed_event.peid and event.eid = $eid and speaker.sid=proposed_event.sid");
    $type = query("SELECT event_type.type from event_type,event where event.type = event_type.typeid");
    $member =  query("SELECT * from event_team where eid = $eid");
    render("event_details_display.php", ["title" => "Event Details", "info" => $info, "name" => $name, "type" =>$type, "member" => $member]);
?>
