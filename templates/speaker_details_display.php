<style>
td{
    padding : 10px;
}
</style>
<div>
    <?php    
        print('<table style="margin:auto">');
        print("<tr><td>Name: </td><td><strong>{$info[0]["name"]}</strong></td></tr>");
        print("<tr><td>Organization: </td><td><strong>{$info[0]["organization"]}</strong></td></tr>");
        print("<tr><td>Field: </td><td><strong>{$info[0]["field"]}</strong></td></tr>");
        print("<tr><td>E-mail: </td><td><strong>{$info[0]["email_id"]}</strong></td></tr>");
        print("<tr><td>Address: </td><td><strong>{$info[0]["address"]}</strong></td></tr>");        
        print("<tr><td>Date of first contact: </td><td><strong>{$info[0]["date_of_first_contact"]}</strong></td></tr>");
        print("<tr><td>Point of contact: </td><td><strong>{$info[0]["point_of_contact"]}</strong></td></tr>");
        print("<tr><td>Phone: </td><td><strong>");
        $contacts = array();

        foreach ($contact as $row) {
        	//print("{$row["Phone_no"]}, ");
        	array_push($contacts, $row["Phone_no"]);
        }
        echo join(", ", $contacts);
        print("</strong></td></tr>");
        print("</table>");
    ?>
</div>
