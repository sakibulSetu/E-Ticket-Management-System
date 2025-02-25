<?php
if (isset($_POST['search'])) {
    echo "
    <style>
    #searchform{
        display:none;
    }
    </style>
    ";
    $depart = $_POST['from'];
    $dest = $_POST['to'];
    $query = "SELECT * FROM airschedule,airlist,airowner,departlist WHERE DEPART = '$depart' AND DEST = '$dest' AND departlist.SCHEDULE_ID=airschedule.SCHEDULE_ID AND airschedule.AIR_ID = airlist.AIR_ID AND airlist.OWNER = airowner.OWNER_ID AND DEPART_TIME >= NOW() ORDER BY DEPART_TIME";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 0) {
        echo "
        <br><h6 class='alert alert-danger animate__animated animate__shakeX'>NO AIRPLANE AVAILABLE NOW FROM $depart to $dest</h6><br>
        <br><a href='indexAir.php' class='btn btn-outline-primary'>SEARCH AGAIN</a><br>
        ";
    } else {
        echo "
        <div class='table-responsive'>
        <br><table class='table table-info table-hover' id='list'>
        <caption>List of Available AIRPLANEs</caption>
        <thead class='thead-dark animate__animated animate__headShake animate__slower'>
        <tr>
        <th>AIRPLANE Details</th>
        <th>PRICE(TK)</th>
        <th>VIEW SEATS</th>
        </tr>
        </thead>
        <tbody>
        ";
        while ($row = mysqli_fetch_array($result)) {
            $air_id = $row['AIR_ID'];
            $schedule_id = $row['SCHEDULE_ID'];
            $departcounter = $row['DEPART_COUNTER'];
            $destcounter = $row['DEST_COUNTER'];
            $time = $row['DEPART_TIME'];
            $price = $row['PRICE'];
            $class = $row['CLASS'];
            $company = $row['COMPANY'];
            $query2 = "SELECT ADDRESS FROM aircounter WHERE COUNTER_ID = '$departcounter'";
            $result2 = mysqli_query($con, $query2);
            $row2 = mysqli_fetch_assoc($result2);
            $address = $row2['ADDRESS'];
            echo "
            <tr class='animate__animated animate__flipInX animate__slower'>
            <td class='text-left'><b class='text-info'>$company</b> ($class)<br> <b>From:</b> $depart ($address)<br> <b>To:</b> $dest<br> <b>Departure Time:</b> <i class='text-info'>$time</i> </td>
            <td class='align-middle'>$price</td>
            <form action='?schedule=$schedule_id&air=$air_id' target='_self' enctype='multipart/form-data' method='POST'>
            <td class='align-middle'><button type='submit' class='btn btn-outline-secondary' value='GO' name='go'>GO</button></td>
            </form>
            </tr>
            ";
        }
        echo "
        </tbody>
        </table>
        </div>
        <br><a href='indexAir.php' class='btn btn-outline-primary'>SEARCH AGAIN</a><br>
        ";
    }
}
?>
<script>
    $(document).ready(function() {
        $('#list').DataTable();
    });
    $('#list').dataTable({
        "order": [],
        "lengthMenu": [5, 10, 20, 50, 75, 100],
        columnDefs: [{
            orderable: false,
            targets: [0, 2]
        }]
    });
</script>