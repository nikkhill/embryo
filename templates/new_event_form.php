<style>  iframe {
                z-index : -9999;
                position: absolute;
                top : 0;
                left    : 0;
                width   : 100%;
                height  : 100%;
                margin  : 0;
                padding : 0;
                border: 0;
            }
        </style>    
<!--        <iframe src="../templates/anim.html"></iframe> -->
<form action="new_event.php" method="post">
    <fieldset>
        <!-- <div class="form-group">
            <input autofocus class="form-control" name="username" placeholder="Username ?" type="text"/>
        </div>      --> 
        <div class="form-group">
            Speaker:
            <?php
                $con = mysqli_connect("localhost", "root", "", "embryo_data");
                $query = mysqli_query($con, "SELECT sid,name from speaker");
                echo '<select name="sid">';
                echo '<option value="0">Select Speaker</option>';
                while($row = mysqli_fetch_array($query))
                {
                    echo '<option value="'.$row['sid'].'">'.$row['name'].'</option>';
                }
                echo '</select>';
            ?>
            <!--Speaker:<input autofocus class="form-control" name="sid" placeholder="XXXXXX" type="text"/>-->
        </div>     
        <div class="form-group">
            Confirmation Status: <input autofocus class="form-control" name="confirmation_status" placeholder="Default:Pending" type="text"/>
        </div>
        <div class="form-group">
            Proposed Topic: <input class="form-control" name="proposed_topic" placeholder="enter topic" type="text"/>
        </div>
        <div class="form-group">
            Date of Contact: <input class="form-control" name="date_of_contact" placeholder="YYYY-MM-DD" type="text"/>
        </div>
        <div class="form-group">
            draft URL: <input autofocus class="form-control" name="draft_URL" placeholder="link" type="text"/>
        </div>
        <div class="form-group">
            Proposed Expenditure: <input autofocus class="form-control" name="proposed_expenditure" placeholder="link" type="text"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Add Event</button>
        </div>
    </fieldset>
</form>
