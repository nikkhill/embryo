<?php
	require('../includes/config.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
        if (empty($_POST["name"]))
        {
            apologize("You must provide a name.");
        }
        else
        {                        
            query("INSERT INTO speaker (name, organization, designation, field, email_id, address, point_of_contact, date_of_first_contact) VALUES(?, ?, ?, ?, ?, ?, ?, ?)",  $_POST["name"], $_POST["organization"], $_POST["designation"], $_POST["field"], $_POST["email_id"], $_POST["address"], $_POST["point_of_contact"], $_POST["date_of_first_contact"]);
            if (!empty($_POST["phone"]))
            {
                $rows = query("SELECT LAST_INSERT_ID() AS id");
                $id = $rows[0]["id"];
                query("INSERT INTO speaker_contact_info VALUES ('{$id}', '{$_POST["phone"]}')");
            }
            redirect("speakers.php");           
        }
	}
?>

