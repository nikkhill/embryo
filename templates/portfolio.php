        
        <table class="table table-striped table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($positions as $position): ?>

                <tr>
                    <td><?= $position["name"] ?></td>
                    <td><?= $position["author"] ?></td>
                    <td>₹ <?= $position["price"] ?></td>
                </tr>

            <?php endforeach ?>
            
            
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="alert alert-dismissable alert-info">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Hi!</strong> If you have sold a book, don't forget to <a href="sold.php" class="alert-link">remove</a> it from the buyer's list.
                </div>
            </div>
        </div>

