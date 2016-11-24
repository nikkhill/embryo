<form action="update_speaker.php" method="post" id="add_form">
    <fieldset>
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="sid" value="<?= $row['sid']?>">
        <div class="form-group">
            <input autofocus class="form-control" name="name" placeholder="Name" type="text" value="<?= $row['name']?>" />
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="organization" placeholder="Organization" type="text" value="<?= $row['organization']?>" />
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="designation" placeholder="Designation" type="text" value="<?= $row['designation']?>"/>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="field" placeholder="Field" type="text" value="<?= $row['field']?>"/>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="email_id" placeholder="Email" type="email" value="<?= $row['email_id']?>"/>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="address" placeholder="Address" type="text" value="<?= $row['address']?>"/>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="phone" placeholder="Phone" type="text"/>
        </div>
        <div class="form-group"> Date of first contact:<br>
            <input autofocus class="form-control" name="date_of_first_contact" placeholder="Date of first contact" type="date" value="<?= $row['date_of_first_contact']?>"/>
        </div>
        <div class="form-group" id="point_of_contact_input"> Point of contact:<br> 
            <select class="form-control" id="select_point_of_contact" name="point_of_contact" value="<?= $row['point_of_contact']?>">
              <?php 
                foreach ($point_of_contacts as $opt) {
                    echo "<option value=\"".$opt["member_id"]. "\">".$opt["name"]."</option>";
                }
              ?>
            </select>
         </div>     
         <div class="form-group">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </fieldset>
</form>