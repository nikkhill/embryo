<div class="row">
    <div class="col-lg-12">
        <table id="etable" class="table table-striped table table-hover">
            <thead>
                <tr>
                    <th>Speaker</th>
                    <th>Topic</th>
                    <th>Status</th>
                    <th>View Info</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($erows as $erow): ?>

                <tr>
                    <td><?= $erow["name"] ?></td>
                    <td><?= $erow["topic"] ?></td>
                    <td>
                        <?php
                            if($erow["event_date"]<date("Y-m-d"))
                            {
                                echo "Closed";
                            }
                            else
                            {
                                echo "Confirmed";
                            }
                        ?>
                    </td>
                    <td>
                        <?= "<a href=\"event_details.php?eid=" . $erow['eid'] . "\">More</a>"?>

                    </td>
                </tr>

            <?php endforeach ?>  
            <?php foreach ($prows as $prow):
                if($prow["confirmation_status"]!='Confirmed')
                {
                    echo "<tr>";
                    echo "<td>".$prow['name']."</td>";
                    echo "<td>".$prow['proposed_topic']."</td>";
                    echo "<td>".$prow['confirmation_status']."</td>";
                    echo "<td><a href=\"proposed_event_details.php?peid=" . $prow['peid'] . "\">More</a></td>";
                    echo "</tr>";
                }
            endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#etable').DataTable();
    });
</script>

