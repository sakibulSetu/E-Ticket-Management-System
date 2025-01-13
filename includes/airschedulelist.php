<?php
$query = "SELECT * FROM airschedule,airlist WHERE airschedule.AIR_ID=airlist.AIR_ID AND OWNER='$user_id' ORDER BY airschedule.REG DESC";
$result = mysqli_query($con, $query);
echo "
<br>
<table class='table table-hover' id='airschedulelist'>
<thead class='thead-dark'>
<tr>
<th>AIRPLANE DETAILS</th>
<th>DEPATRURE DETAILS</th>
</tr>
</thead>
<tbody>
";
while ($row = mysqli_fetch_array($result)) {
    $airid = $row['AIR_ID'];
    $coach = $row['Fight_NO'];
    $class = $row['CLASS'];
    $seat = $row['SEAT_TYPE'];
    $schedule_id = $row['SCHEDULE_ID'];
    $depart = $row['DEPART'];
    $dest = $row['DEST'];
    $price = $row['PRICE'];
    $dest_count = $row['DEST_COUNTER'];
    echo "
    <tr>
    <td class='text-left text-success'>
    <b>AIR ID</b>: $airid <br><b>FIGHT NO</b>: $coach <br><b>CLASS</b>: $class <br><b>SEAT TYPE</b>: $seat <br><b>SCHEDULE ID</b>: $schedule_id <br><b>DEPARTURE</b>: $depart <br><b>DESTINATION</b>: $dest ($dest_count)<br><b>PRICE</b>: $price TK
    </td> 
    <td class='text-left text-success'><b>DEPARTURE COUNTERS & TIME</b>:<br>
    ";
    $query2 = "SELECT * FROM departlist WHERE SCHEDULE_ID='$schedule_id' ORDER BY DEPART_TIME ASC";
    $result2 = mysqli_query($con, $query2);
    while ($row2 = mysqli_fetch_array($result2)) {
        $depart_counter = $row2['DEPART_COUNTER'];
        $time = $row2['DEPART_TIME'];
        echo "
        👨‍💼 $depart_counter : $time<br>
        ";
    }
    echo "
    </td> 
    </tr>
    ";
}
echo "
</tbody>
</table>
<br>
";
?>
<script>
    $(document).ready(function() {
        $('#schedulelist').DataTable();
    });
    $('#schedulelist').dataTable({
        "order": [],
        "lengthMenu": [5, 10, 25, 50, 75, 100]
    });
</script>