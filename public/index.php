<?php

    // configuration
    require("../includes/config.php"); 
    if ($_SERVER["REQUEST_METHOD"] == "GET")  {
	    $rows = query("SELECT event.eid, event.peid, event.topic, event.event_date, speaker.name FROM event,speaker,proposed_event where event.peid=proposed_event.peid and proposed_event.sid=speaker.sid order by event_date");
        $prows = query("SELECT proposed_event.peid, proposed_event.sid, proposed_event.proposed_topic, proposed_event.confirmation_status, speaker.name FROM proposed_event INNER JOIN speaker where proposed_event.confirmation_status='Pending' and speaker.sid=proposed_event.sid order by proposed_event.peid");

    render("home.php", ["title" => "Home", "rows" => $rows, "prows"=>$prows]);
    }
    
?>

