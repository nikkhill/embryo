<?php
    
?>

<form action="confirm_event_details.php" method="post">
    <fieldset>
        <!-- <div class="form-group">
            <input autofocus class="form-control" name="username" placeholder="Username ?" type="text"/>
        </div>      -->
        <input type="hidden" name="peid" value="<?=$peid?>">
        <div class="form-group"><input autofocus class="form-control" name="topic" placeholder="Topic" type="text"/>
        </div>
        <div class="form-group">Event date:<br><input autofocus class="form-control" name="event_date" type="date"/>
        </div>  
        <div class="form-group">
            <select autofocus class="form-control" name="type">
                <option value="0">Select Event Type</option>
                <?php
                    $rows = query("SELECT typeid, type FROM event_type");
                    foreach ($rows as $row) {
                        echo '<option value="'.$row['typeid'].'">'.$row['type'].'</option>';
                    }
                ?>
            </select>
            <!--Speaker:<input autofocus class="form-control" name="sid" placeholder="XXXXXX" type="text"/>-->
        </div>
        <div class="form-group"><input autofocus class="form-control" name="room" placeholder="Room" type="text"/>
        </div>
        <div class="form-group">
            <select autofocus class="form-control" id="select_video_status" name="video_status">
                <option value="0">Video Status</option>
                <option value="1">Ready</option>
                <option value="0">Pending</option>
            </select>
        </div>
        <div class="form-group">
            <select autofocus class="form-control" id="select_article_status" name="article_status">
                <option value="0">Article Status</option>
                <option value="1">Ready</option>
                <option value="0">Pending</option>
            </select>
        </div>
        <div class="form-group">
            <select autofocus class="form-control" id="select_poster_status" name="poster_status">
                <option value="0">Poster Status</option>
                <option value="1">Ready</option>
                <option value="0">Pending</option>
            </select>
        </div>
        <div class="form-group"><input autofocus class="form-control" name="expenditure" placeholder="Expenditure" type="text"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Add Event</button>
        </div>
    </fieldset>
</form>
