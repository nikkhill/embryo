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
        print("<tr><td>Designation: </td><td><strong>{$info[0]["designation"]}</strong></td></tr>");
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
        

    ?>
    </table>
    <form action = "update_speaker.php" method = "POST">
        <input type="hidden" name="sid" value="<?= $id?>">
        <input type="hidden" name="type" value="add_phone">
        <div class="form-group">
         <input autofocus class="form-control" type = "text" name = "phone" placeholder="Add phone" />
        </div>
        <div class="form-group">
         <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </form>

    <form action = "update_speaker.php" method = "GET">
        <input type="hidden" name="sid" value="<?= $id?>">
        <div class="form-group">
         <button type="submit" class="btn btn-default">Edit details</button>
        </div>
    </form>

    <form action = "delete_speaker.php" method = "GET">
        <input type="hidden" name="sid" value="<?= $id?>">
        <div class="form-group">
         <button type="submit" class="btn btn-danger">Delete</button>
        </div>
    </form>
</div>
