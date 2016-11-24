<div class="row">
    <div class="col-lg-6">
        <h3>Upcoming Events</h3>
        <table class="table table-striped table table-hover">
            <thead>
                <tr>
                    <th>Speaker</th>
                    <th>Topic</th>
                    <th>Date</th>
                    <th>View Info</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?= $row["name"] ?></td>
                        <td><?= $row["topic"] ?></td>
                        <td><?= $row["event_date"] ?></td>
                        <td><?= "<a href=\"event_details.php?eid=" . $row['eid'] . "&peid=" .$row['peid']. "\">More</a>"?></td>
                    </tr>
                <?php endforeach ?>            
            </tbody>
        </table>
    </div>
    <div class="col-lg-6">
        <h3>Proposed Events</h3>
        <table class="table table-striped table table-hover">
            <thead>
                <tr>
                    <th>Speaker</th>
                    <th>Proposed Topic</th>
                    <th>Confirmation Status</th>
                    <th>View Info</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prows as $prow): ?>
                    <tr>
                        <td><?= $prow["name"] ?></td>
                        <td><?= $prow["proposed_topic"] ?></td>
                        <td><?= $prow["confirmation_status"] ?></td>
                        <td><?= "<a href=\"proposed_event_details.php?peid=" . $prow['peid'] . "\">More</a>"?></td>
                    </tr>
                <?php endforeach ?>            
            </tbody>
        </table>
    </div>
</div>