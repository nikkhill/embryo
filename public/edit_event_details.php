<?php

    // configuration
    require("../includes/config.php"); 

    if ($_SERVER["REQUEST_METHOD"] == "GET") 
	{
		$sql = "SELECT * FROM event WHERE eid=".htmlspecialchars($_GET['eid']);

		$rows = query($sql);
        if (count($rows) == 1) {
            render("update_event_form.php", ["title" => "Update event details", "eid" => $_GET["eid"], "row" => $rows[0]]);
        }
        else apologize("Error!");
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST")  {

        if (empty($_POST["eid"])) {
	    	apologize("Wrong Method");
	    }
        else if($_POST["type"] == "add_member")
        {
            if (empty($_POST["member_id"])) {
				apologize("No member provided");
			}
			else {
				query("INSERT INTO event_team VALUES (?,?)", $_POST["eid"], $_POST["member_id"]);
			}            
        }
        else if($_POST["type"] == "edit")
        {
        	apologize("added");
			if (empty($_POST["topic"])) {
				apologize("No topic provided!");
			}
			else {

				query("UPDATE event SET topic=?, event_date=?, type=?, room=?, video_status=?, article_status=?, poster_status=?, expenditure=? WHERE eid=?", $_POST["topic"], $_POST["event_date"], $_POST["event_type"], $_POST["room"], $_POST["video_status"], $_POST["article_status"], $_POST["poster_status"], $_POST["expenditure"], $_POST["eid"]);

			}
        }
        apologize($_POST["type"]);
        //render("apology.php", ["message" => "lol"]);
		redirect("event_details.php?eid=".htmlspecialchars($_POST["eid"]));
	}