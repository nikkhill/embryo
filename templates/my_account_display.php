<div class="row">
    <div class="col-lg-6">
         <form action="my_account.php" method="post">
            <fieldset>
                <input type="hidden" name="type" value="phone">
                <div class="form-group">
                    <input class="form-control" name="phone" value="<?= htmlspecialchars($info["phone_no"])?>" type="text"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Change Phone</button>
                </div>
            </fieldset>
        </form>

    </div>     
    <div class="col-lg-6">
        <form action="my_account.php" method="post">
            <fieldset>
                <input type="hidden" name="type" value="pwd">
                <div class="form-group">
                    <input class="form-control" name="password" placeholder="Current Password" type="password"/>
                </div>
                <div class="form-group">
                    <input class="form-control" name="new_password" placeholder="New Password" type="password"/>
                </div>
                <div class="form-group">
                    <input class="form-control" name="confirmation" placeholder="Confirm Password" type="password"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Change Password</button>
                </div>
            </fieldset>
        </form>
    </div>        
</div>