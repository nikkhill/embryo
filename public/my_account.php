<?php
    require("../includes/config.php"); 

	if ($_SERVER["REQUEST_METHOD"] == "GET")  {
		$info = query("SELECT id, member_id, name, phone_no, role, account_status FROM embryo_members WHERE id=?", $_SESSION["id"]);      
  

	    render("my_account_display.php", ["title" => "Hi ".$info[0]["name"]."!", "info" => $info[0]]);
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST")  {
		if ($_POST["type"]=="phone") {
			if (empty($_POST["phone"])) 
					apologize("You must provide your phone for contacting others.");
			else {
				query("UPDATE embryo_members SET phone_no=? WHERE id=?", $_POST["phone"], $_SESSION["id"]);
			}
        }
		else {
			if (empty($_POST["password"]))
	        {
	            apologize("You must provide your current password.");
	        }
	        else if (empty($_POST["new_password"]))
	        {
	            apologize("You must provide a password.");
	        }
	        else if ($_POST["confirmation"] != $_POST["new_password"])
	        {
	            apologize("Passwords do not match.");
	        }		

	        $rows = query("SELECT hash FROM embryo_members WHERE id = ?", $_SESSION["id"]);

	        if (count($rows) == 1)
	        {
	            $row = $rows[0];
	            if (crypt($_POST["password"], $row["hash"]) == $row["hash"])
	            {
	                query("UPDATE embryo_members SET hash=? WHERE id=?", crypt($_POST["new_password"]), $_SESSION["id"]);
                	redirect("logout.php");
	            }
	        }
	        apologize("Invalid password.");
		}
		redirect("index.php");
	}
?>