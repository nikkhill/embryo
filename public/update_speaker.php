<?php

    // configuration
    require("../includes/config.php"); 

    if ($_SERVER["REQUEST_METHOD"] == "GET") 
	{
		$sql = "SELECT * FROM speaker WHERE sid=".htmlspecialchars($_GET["sid"]);

		$rows = query($sql);
        if (count($rows) == 1) {
        	$point_of_contacts = query("SELECT member_id,name FROM embryo_members");
   
            render("update_speaker_form.php", ["title" => "Update speaker details", "sid" => $_GET["sid"], "row" => $rows[0], "point_of_contacts" => $point_of_contacts]);
        }
        else apologize("Error!");
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST")  {
	    if (empty($_POST["sid"])) {
	    	apologize("Wrong Method");
	    }
	    if ($_POST["type"] == "add_phone") {
	    	if (empty($_POST["phone"])) {
				apologize("Phone no. cannot be empty");
			}
			else {
				query("INSERT INTO speaker_contact_info VALUES (?,?)", $_POST["sid"], $_POST["phone"]);
			}
		}
		
		else if ($_POST["type"] == "edit") {
			if (empty($_POST["name"])) {
				apologize("No name provided!");
			}
			else {
				query("UPDATE speaker SET name=?, organization=?, designation=?, field=?, email_id=?, address=?, date_of_first_contact=?, point_of_contact=? WHERE sid=?", $_POST["name"], $_POST["organization"], $_POST["designation"], $_POST["field"], $_POST["email_id"], $_POST["address"], $_POST["date_of_first_contact"], $_POST["point_of_contact"], $_POST["sid"]);

				if(!empty($_POST["phone"])) {
					query("DELETE from speaker_contact_info WHERE sid=?", $_POST["sid"]);

					query("INSERT INTO speaker_contact_info VALUES (?,?)", $_POST["sid"], $_POST["phone"]);
				}
			}
		}

		redirect("speaker_details.php?sid=".htmlspecialchars($_POST["sid"]));
	}