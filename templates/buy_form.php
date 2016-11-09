        <div class="col-md-6 col-md-offset-3">
                <div class="alert alert-dismissable alert-info">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Use Ctrl+F to search.</strong> Click on book name to display contact of seller.
                </div>
        </div>
        <table class="table table-striped table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($rows as $row): ?>

                <tr>
                    <td><?= "<a href='view_details.php?key={$row["id"]}'>{$row["name"]}</a>" ?></td>
                    <td><?= $row["author"] ?></td>
                    <td>₹ <?= $row["price"] ?></td>
                </tr>

            <?php endforeach ?>
            
            
            </tbody>
        </table>
