<div class="row">
    <div class="col-lg-6">
        <table id="stable" class="table table-striped table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Organization</th>
                    <th>View Info</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($rows as $row): ?>

                <tr>
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["organization"] ?></td>
                    <td>
                        <?= "<a href=\"speaker_details.php?sid=" . $row['sid'] . "\">More</a>"?>

                    </td>
                </tr>

            <?php endforeach ?>            
            </tbody>
        </table>
    </div>
    <div class="col-lg-6">

        <div class="container-fluid">

            <div class="form-group">
                <select class="form-control" id="select_filter">
                  <option id="oname" value="name">Name</option>
                  <option id="oorganization" value="organization">Organization</option>s
                  <option id="ofield" value="field">Field</option>
                  <option id="odesignation" value="designation">Designation</option>
                </select>
            </div>
            <div class="form-group">
                <button id="filter_button" class="btn btn-info" type="submit" onclick="addFields()">
                    <span aria-hidden="true" class="glyphicon glyphicon-plus
                "></span>
                    Filter
                </button>
            </div>

            <fieldset hidden id="templates">
                <div class="form-group" id="direct_input">
                    <input type="text" name="qtext" autofocus class="form-control" placeholder="Enter name">
                </div>
                <div class="form-group" id="organization_input">
                    <select class="form-control" id="select_filter">
                      <?php 
                        foreach ($organizations as $opt) {
                            echo "<option value=\"".$opt["organization"]. "\">".$opt["organization"]."</option>";
                        }
                      ?>
                    </select>
                 </div>     
                 <div class="form-group" id="field_input">
                    <select class="form-control" id="select_filter">
                      <?php 
                        foreach ($fields as $opt) {
                            echo "<option value=\"".$opt["field"]. "\">".$opt["field"]."</option>";
                        }
                      ?>
                    </select>
                 </div>     
                 <div class="form-group" id="designation_input">
                    <select class="form-control" id="select_filter">
                      <?php 
                        foreach ($designations as $opt) {
                            echo "<option value=\"".$opt["designation"]. "\">".$opt["designation"]."</option>";
                        }
                      ?>
                    </select>
                 </div>     
            </fieldset>

            <form hidden action="speakers.php" method="post" id="query_form">
                <fieldset id="qfeildset">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"> Query </button>
                    </div>
                </fieldset>
            </form>

            <form hidden action="add_speaker.php" method="post" id="add_form">
                <fieldset>
                    <div class="form-group">
                        <input autofocus class="form-control" name="name" placeholder="Name" type="text"/>
                    </div>
                    <div class="form-group">
                        <input autofocus class="form-control" name="organization" placeholder="Organization" type="text"/>
                    </div>
                    <div class="form-group">
                        <input autofocus class="form-control" name="designation" placeholder="Designation" type="text"/>
                    </div>
                    <div class="form-group">
                        <input autofocus class="form-control" name="field" placeholder="Field" type="text"/>
                    </div>
                    <div class="form-group">
                        <input autofocus class="form-control" name="email_id" placeholder="Email" type="email"/>
                    </div>
                    <div class="form-group">
                        <input autofocus class="form-control" name="address" placeholder="Address" type="text"/>
                    </div>
                    <div class="form-group">
                        <input autofocus class="form-control" name="phone" placeholder="Phone" type="text"/>
                    </div>
                    <div class="form-group"> Date of first contact:<br>
                        <input autofocus class="form-control" name="date_of_first_contact" placeholder="Date of first contact" type="date"/>
                    </div>
                    <div class="form-group" id="point_of_contact_input"> Point of contact:<br> 
                        <select class="form-control" id="select_point_of_contact" name="point_of_contact">
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

            

        </div>

        <script type='text/javascript'>

            function addFields(){
                var selected = $("#select_filter")[0].value;
                if (selected == "") {
                    $("#filter_button").hide();
                    $("#select_filter").hide();
                }

                else if(selected == "name") {
                    var newf = $("#direct_input").clone();
                    inputf = newf.children();
                    inputf.attr("placeholder", "Enter " + selected);
                    newf.prependTo("#qfeildset");
                    //newf.attr("id", selected + "_input");
                    inputf.attr("name", selected);
                    $("#query_form").show();
                    $("#o" + selected).remove();
                } 
                else {
                    var newf = $("#" + selected + "_input").clone();
                    inputf = newf.children();
                    inputf.attr("placeholder", "Select " + selected);
                    inputf.attr("name", selected);
                    newf.prependTo("#qfeildset");
                    $("#query_form").show();
                    $("#o" + selected).remove();
                }
                
            }

            function addSpeaker() {
                var form = $("#add_form");
                $("#select_filter").hide();
                $("#filter_button").hide();
                $("#add_button").hide();
                form.show();
            }

            $(document).ready(function(){
                $('#stable').DataTable();
            });
        </script>



        <div class="form-group">
            <button id="add_button" class="btn btn-info" type="submit" onclick="addSpeaker()">
                <span aria-hidden="true" class="glyphicon glyphicon-plus
            "></span>
                Add Speaker
            </button>
        </div>
    </div>
</div>

