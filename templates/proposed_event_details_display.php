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
</div>
