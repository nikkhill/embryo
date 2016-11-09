<form action="sold.php" method="post">
    <fieldset>
        <div class="form-group">
            <select class="form-control" name="name">
                <option value=""> </option>
                <?php foreach ($yourshares as $yourshare): ?>
                    <?= print("<option value='" . $yourshare["name"] . "'>" . $yourshare["name"] . "</option>") ?>
                <?php endforeach ?>          
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Delete</button>
        </div>
    </fieldset>
</form>

