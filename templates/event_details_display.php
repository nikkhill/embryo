<style>
td{
    padding : 10px;
}
</style>
<div>
    <?php    
        print('<table style="margin:auto">');
        print("<tr><td>Speaker: </td><td><strong><a href=\"speaker_details.php?sid=" . $name[0]['sid'] . "\">{$name[0]["name"]}</a></strong></td></th>");
        if($info[0]["event_date"]<date("Y-m-d"))
            print("<tr><td>Status: </td><td><strong>Closed</strong></td></tr>");
        else
            print("<tr><td>Status: </td><td><strong>Confirmed</strong></td></tr>");
        print("<tr><td>Topic: </td><td><strong>{$info[0]["topic"]}</strong></td></tr>");
        print("<tr><td>Event date: </td><td><strong>{$info[0]["event_date"]}</strong></td></tr>");
        print("<tr><td>Type: </td><td><strong>{$type[0]["type"]}</strong></td></tr>");
        print("<tr><td>Expenditure: </td><td><strong>{$info[0]["expenditure"]}</strong></td></tr>");
        print("<tr><td>Team: </td><td><strong>");
        $members = array();
        foreach ($member as $row) {
        	//print("{$row["Phone_no"]}, ");
        	array_push($members, $row["member_id"]);
        }
        echo join(", ", $members);
        print("</strong></td></tr>");
        print("</table>");
        print('</form>');
    ?>
    <form action = "edit_event_details.php" method = "POST">
        <input type="hidden" name="eid" value="<?= $info[0]["eid"]?>">
        <input type="hidden" name="type" value="add_member">
        <div class="form-group">
            <select autofocus class="form-control" name="member_id">
                <?php
                    $rows = query("SELECT member_id,name FROM embryo_members");
                    foreach ($rows as $row) {
                        echo '<option value="'.$row['member_id'].'">'.$row['name'].'</option>';
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
         <button type="submit" class="btn btn-default">Add member</button>
        </div>
    </form>
    <form action = "edit_event_details.php" method = "GET">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="eid" value="<?=$info[0]["eid"]?>">
    <div class="form-group">
    <button type="submit" class="btn btn-default">Edit details</button>
    </div>
    </form>
</div>
