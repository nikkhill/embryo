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
                    <th>Account Status</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($approved as $row): ?>

                <tr>
                    <td><?= $row["member_id"] ?></td>
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["phone_no"] ?></td>
                    <td><?= $row["role"] ?></td>
                    <td><?= $row["account_status"] ?></td>
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
                                Approve
                            </button>
                        </div>
                    </td>
                </tr>

            <?php endforeach ?>  


            </tbody>
        </table>
        <form hidden action="approve_member.php" method="post" id="approve_form">
            <fieldset>
                <div class="form-group">
                    <input autofocus class="form-control" name="role" placeholder="Role" type="text"/>
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
       
