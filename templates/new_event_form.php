<form action="new_event.php" method="post">
    <fieldset>
        <!-- <div class="form-group">
            <input autofocus class="form-control" name="username" placeholder="Username ?" type="text"/>
        </div>      --> 
        <div class="form-group">
            <select autofocus class="form-control" name="sid">
                <option value="0">Select Speaker</option>
                <?php
                    $rows = query("SELECT sid, name FROM speaker");
                    foreach ($rows as $row) {
                        echo '<option value="'.$row['sid'].'">'.$row['name'].'</option>';
                    }
                ?>
            </select>
            <!--Speaker:<input autofocus class="form-control" name="sid" placeholder="XXXXXX" type="text"/>-->
        </div>     
        <div class="form-group">
            <select autofocus class="form-control" id="select_confirmation_status" name="confirmation_status">
                <option value="null">Confirmation Status</option>
                <option value="Pending">Pending</option>
                <option value="Confirmed">Confirmed</option>
                <option value="Rejected">Rejected</option>
            </select>
        </div>
        <div class="form-group"><input autofocus class="form-control" name="proposed_topic" placeholder="Proposed Topic" type="text"/>
        </div>
        <div class="form-group"><input autofocus class="form-control" name="draft_URL" placeholder="Draft URL" type="text"/>
        </div>
        <div class="form-group"><input autofocus class="form-control" name="proposed_expenditure" placeholder="Proposed Expenditure" type="text"/>
        </div>
        <div class="form-group">Date of contact:<br><input autofocus class="form-control" name="date_of_contact" type="date"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Add Event</button>
        </div>
    </fieldset>
</form>
