<div class="row">
    <div class="col-lg-6">
        <h3>Upcoming Events</h3>
        <table id="hetable" class="table table-striped table table-hover">
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
        <h3>Pending Proposals</h3>
        <table id="hptable" class="table table-striped table table-hover">
            <thead>
                <tr>
                    <th>Speaker</th>
                    <th>Proposed Topic</th>
                    <th>View Info</th>
                    <th>Confirm</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prows as $prow): ?>
                    <tr>
                        <td><?= $prow["name"] ?></td>
                        <td><?= $prow["proposed_topic"] ?></td>
                        <td><?= "<a href=\"proposed_event_details.php?peid=" . $prow['peid'] . "\">More</a>"?></td>
                        <td><?= "<a href=\"confirm_event_details.php?peid=" . $prow['peid'] . "\">Confirm</a>"?></td>
                    </tr>
                <?php endforeach ?>            
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#hetable').DataTable();
        $('#hptable').DataTable();
    });
</script>