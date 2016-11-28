<?php
	require('../includes/config.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		// validate submission
        $this_role = query("SELECT role FROM embryo_members WHERE id=?", $_SESSION["id"]); 

        if ($this_role[0]["role"] != "President")
        {
            apologize("You are not authorized to approve members. Only President can.");
        }
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
