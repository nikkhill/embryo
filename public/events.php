<?php

    // configuration
    require("../includes/config.php"); 

	if ($_SERVER["REQUEST_METHOD"] == "GET")  {
	    $erows = query("SELECT event.eid,event.topic,event.event_date,speaker.name FROM event,speaker,proposed_event where event.peid = proposed_event.peid and speaker.sid = proposed_event.sid order by eid");     
        $etopics = query("SELECT DISTINCT topic FROM event order by eid");
        $prows = query("SELECT proposed_event.peid,proposed_event.proposed_topic,proposed_event.confirmation_status, speaker.name FROM proposed_event,speaker where speaker.sid = proposed_event.sid order by peid");

	    render("events_display.php", ["title" => "Events", "erows" => $erows, "etopics" => $etopics, "prows" => $prows]);
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST")  {
	    $sql = "SELECT * FROM event WHERE 1";
	    if (!empty($_POST["name"])) {
            $sql = $sql . " AND name LIKE '%" . $_POST["name"] . "%'";
        } 
        if (!empty($_POST["organization"])) {
            $sql = $sql . " AND organization = '" . $_POST["organization"] . "'";
        }
        if (!empty($_POST["designation"])) {
            $sql = $sql . " AND designation = '" . $_POST["designation"] . "'";
        }
        if (!empty($_POST["field"])) {
            $sql = $sql . " AND field = '" . $_POST["field"] . "'";
        }

        $rows = query($sql);
	    $organizations = query("SELECT DISTINCT organization FROM speaker order by name");
	    $fields = query("SELECT DISTINCT field FROM speaker order by name");
	    $designations = query("SELECT DISTINCT designation FROM speaker order by name");
	    $point_of_contacts = query("SELECT member_id,name FROM embryo_members order by name");

	    render("speakers_display.php", ["title" => "Speakers", "rows" => $rows, "organizations" => $organizations, "fields" => $fields, "designations" => $designations, "point_of_contacts" => $point_of_contacts]);
	}
?>
