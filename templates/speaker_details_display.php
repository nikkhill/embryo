<div>
    <?php        
        print("<p>Name: <strong>{$info[0]["name"]}</strong></p>");
        print("<p>Organization: <strong>{$info[0]["organization"]}</strong></p>");
        print("<p>Field: <strong>{$info[0]["field"]}</strong></p>");
        print("<p>E-mail: <strong>{$info[0]["email_id"]}</strong></p>");
        print("<p>Address: <strong>{$info[0]["address"]}</strong></p>");        
        print("<p>Date of first contact: <strong>{$info[0]["date_of_first_contact"]}</strong></p>");
        print("<p>Point of contact: <strong>{$info[0]["point_of_contact"]}</strong></p>");
        print("<p>Phone: <strong>");
        $contacts = array();

        foreach ($contact as $row) {
        	//print("{$row["Phone_no"]}, ");
        	array_push($contacts, $row["Phone_no"]);
        }
        echo join(", ", $contacts);
        print("</strong></p>");
    ?>
</div>
