<?php
	require('../includes/config.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		// validate submission
        if (empty($_POST["role"]))
        {
            apologize("You must provide a role.");
        }
        if (empty($_POST["id"]))
        {
            apologize("Something went wrong, try again!");
        }

        else
        {              
            query("UPDATE embryo_members SET account_status = 1, role = '{$_POST["role"]}' WHERE id = '{$_POST["id"]}'");
            redirect("members.php");           
        }
	}
?>
