<style>
td{
    padding : 10px;
}
</style>
<div>
    <?php    
        print('<table style="margin:auto">');
        print("<tr><td>Speaker: </td><td><strong><a href=\"speaker_details.php?sid=" . $info[0]['sid'] . "\">{$name[0]["name"]}</a></strong></td></th>");
        print("<tr><td>Confirmation status: </td><td><strong>{$info[0]["confirmation_status"]}</strong></td></tr>");
        print("<tr><td>Proposed Topic: </td><td><strong>{$info[0]["proposed_topic"]}</strong></td></tr>");
        print("<tr><td>Date of contact: </td><td><strong>{$info[0]["date_of_contact"]}</strong></td></tr>");
        print("<tr><td>Draft URL: </td><td><strong>{$info[0]["draft_URL"]}</strong></td></tr>");
        print("<tr><td>Proposed Expenditure: </td><td><strong>{$info[0]["proposed_expenditure"]}</strong></td></tr>");
        print("");
        print("</table>");
    ?>
    <?php
        if($info[0]["confirmation_status"]==='Pending')
        {
        print('<form action = "update_proposed_event.php" method = "GET">');
        print('<input type="hidden" name="peid" value="'.$info[0]["peid"].'">');
        print('<div class="form-group">');
        print('<button type="submit" class="btn btn-default">Change Status To Rejected</button>');
        print('</div>');
        print('</form>');
        print('<form action = "confirm_event_details.php" method = "GET">');
        print('<input type="hidden" name="peid" value="'.$info[0]["peid"].'">');
        print('<div class="form-group">');
        print('<button type="submit" class="btn btn-default">Confirm</button>');
        print('</div>');
        print('</form>');
        }
    ?>
</div>
