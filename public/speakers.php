<?php

    // configuration
    require("../includes/config.php"); 

	if ($_SERVER["REQUEST_METHOD"] == "GET")  {
	    $rows = query("SELECT sid, name, organization FROM speaker order by name");      
	    $organizations = query("SELECT DISTINCT organization FROM speaker order by name");
	    $fields = query("SELECT DISTINCT field FROM speaker order by name");
	    $designations = query("SELECT DISTINCT designation FROM speaker order by name");
	    $point_of_contacts = query("SELECT member_id,name FROM embryo_members");
	    //query("INSERT INTO history (id, symbol, type, shares, price) VALUES({$_SESSION["id"]}, '$sym', {$_POST["shares"]})");  

	    render("speakers_display.php", ["title" => "Speakers", "rows" => $rows, "organizations" => $organizations, "fields" => $fields, "designations" => $designations, "point_of_contacts" => $point_of_contacts]);
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST")  {
	    $sql = "SELECT sid, name, organization FROM speaker WHERE 1";
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
	    $point_of_contacts = query("SELECT member_id FROM embryo_members order by name");

	    render("speakers_display.php", ["title" => "Speakers", "rows" => $rows, "organizations" => $organizations, "fields" => $fields, "designations" => $designations, "point_of_contacts" => $point_of_contacts]);
	}
?>
