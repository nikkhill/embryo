        <table class="table table-striped table table-hover">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Symbol</th>
                    <th>Shares</th>
                    <th>Price</th>
                    <th>Time</th>
                    <th>Cost</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($rows as $row): ?>

                <tr>
                    <td><?= $row["type"] ?></td>
                    <td><?= $row["symbol"] ?></td>                   
                    <td><?= $row["shares"] ?></td>
                    <td><?= number_format($row["price"], 2, '.', '') ?></td>
                    <td><?= $row["time"] ?></td>
                    <td><?= number_format($row["cost"], 2, '.', '') ?></td>
                </tr>

            <?php endforeach ?>
            
            
            </tbody>
        </table>
        <div>
            <a href="clrhistory.php">Clear History</a>
        </div>
       
