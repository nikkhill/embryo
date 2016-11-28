<form action="edit_event_details.php" method="post" id="add_form">
    <fieldset>
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="eid" value="<?= $eid?>">
        <div class="form-group"><input autofocus class="form-control" name="topic" placeholder="Topic" type="text" value="<?= $row['topic']?>"/>
        </div>
        <div class="form-group">Event date:<br><input autofocus class="form-control" name="event_date" type="date" value="<?= $row['event_date']?>"/>
        </div>  
        <div class="form-group">
            <select autofocus class="form-control" name="event_type">
                <option value="0">Select Event Type</option>
                <?php
                    $erows = query("SELECT typeid, type FROM event_type");
                    foreach ($erows as $erow) {
                        if($row['type']===$erow['typeid'])
                            echo '<option value="'.$erow['typeid'].'" selected="selected">'.$erow['type'].'</option>';
                        else
                            echo '<option value="'.$erow['typeid'].'">'.$erow['type'].'</option>';
                    }
                ?>
            </select>
            <!--Speaker:<input autofocus class="form-control" name="sid" placeholder="XXXXXX" type="text"/>-->
        </div>
        <div class="form-group"><input autofocus class="form-control" name="room" placeholder="Room" type="text" value="<?= $row['room']?>"/>
        </div>
        <div class="form-group">
            <select autofocus class="form-control" id="select_video_status" name="video_status" value="<?= $row['video_status']?>">
                <option value="0">Video Status</option>
                <?php
                    if($row['video_status']===0)
                    {
                        echo '<option value="1">Ready</option>';
                        echo '<option value="0" selected="selected">Pending</option>';
                    }
                    else
                    {
                        echo '<option value="1" selected="selected">Ready</option>';
                        echo '<option value="0">Pending</option>';
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <select autofocus class="form-control" id="select_article_status" name="article_status" value="<?= $row['article_status']?>">
                <option value="0">Article Status</option>
                <?php
                    if($row['article_status']===0)
                    {
                        echo '<option value="1">Ready</option>';
                        echo '<option value="0" selected="selected">Pending</option>';
                    }
                    else
                    {
                        echo '<option value="1" selected="selected">Ready</option>';
                        echo '<option value="0">Pending</option>';
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <select autofocus class="form-control" id="select_poster_status" name="poster_status" value="<?= $row['poster_status']?>">
                <option value="0">Poster Status</option>
                <?php
                    if($row['poster_status']===0)
                    {
                        echo '<option value="1">Ready</option>';
                        echo '<option value="0" selected="selected">Pending</option>';
                    }
                    else
                    {
                        echo '<option value="1" selected="selected">Ready</option>';
                        echo '<option value="0">Pending</option>';
                    }
                ?>
            </select>
        </div>
        <div class="form-group"><input autofocus class="form-control" name="expenditure" placeholder="Expenditure" type="text" value="<?= $row['expenditure']?>"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Edit Event</button>
        </div>
    </fieldset>
</form>