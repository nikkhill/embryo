<div class="row">
    <div class="col-lg-6">
        <h3>Approved Members</h3>
        <table class="table table-striped table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($approved as $row): ?>

                <tr>
                    <td><?= $row["member_id"] ?></td>
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["phone_no"] ?></td>
                    <td><?= $row["role"] ?></td>
                </tr>

            <?php endforeach ?>            
            </tbody>
        </table>
    </div>
    <div class="col-lg-6">
        <h3>Members not yet approved</h3>
        <table class="table table-striped table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Approval</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($unapproved as $row): ?>

                <tr>
                    <td><?= $row["member_id"] ?></td>
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["phone_no"] ?></td>
                    <td>
                        <div class="btn-group btn-group-xs" role="group">
                            <button id="approve_button" value="<?= $row["id"]?>" class="btn btn-default" type="submit" onclick="editFields('<?= $row["id"]?>')">
                                <span aria-hidden="true" class="glyphicon glyphicon-ok
            "></span> Approve
                            </button>
                        </div>
                    </td>
                </tr>

            <?php endforeach ?>  


            </tbody>
        </table>
        <form hidden action="approve_member.php" method="post" id="approve_form">
            <fieldset>
                <!-- <div class="form-group">
                    <input autofocus class="form-control" name="role" placeholder="Role" type="text"/>
                </div> -->
                <div class="form-group">
                    <select class="form-control" name="role">
                      <option id="o1" value="President">President</option>
                      <option id="o2" value="Secretary">Secretary</option>
                      <option id="o3" value="Comm_Head">Comm_Head</option>
                      <option id="o4" value="EM_Head">EM_Head</option>
                      <option id="o5" value="EB_Head">EB_Head</option>
                      <option id="o6" value="Tech_Head">Tech_Head</option>
                      <option id="o7" value="Comm">Comm</option>
                      <option id="o8" value="EM">EM</option>
                      <option id="o9" value="EB">EB</option>
                      <option id="o10" value="Tech">Tech</option>
                    </select>
                </div>
                <div hidden class="form-group">
                    <input autofocus class="form-control" id="idblock" name="id" type="text"/>
                </div>
                <div class="form-group">
                    <button type="Submit" class="btn btn-default">Submit</button>
                </div>
            </fieldset>
        </form>
        <script type='text/javascript'>
            function editFields(i) {
                var form = $("#approve_form");
                form.show();
                //alert(i);
                $("#idblock").attr("value", i);

            }
        </script>
    </div>
</div>
       
