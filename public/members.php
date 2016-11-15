<?php

    // configuration
    require("../includes/config.php"); 

	if ($_SERVER["REQUEST_METHOD"] == "GET")  {
		$unapproved = query("SELECT id, member_id, name, phone_no, role, account_status FROM embryo_members WHERE account_status != 1");      
	    $approved = query("SELECT id, member_id, name, phone_no, role, account_status FROM embryo_members WHERE account_status = 1");      

	    render("members_display.php", ["title" => "Members", "approved" => $approved, "unapproved" => $unapproved]);
	}
?>