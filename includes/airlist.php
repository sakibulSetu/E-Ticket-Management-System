<?php
$query = "SELECT * FROM airlist WHERE OWNER='$user_id' ORDER BY REG DESC";
$result = mysqli_query($con, $query);
echo "
<br>
<table class='table table-hover' id='airlist'>
<thead class='thead-dark'>
<tr>
<th>AIRPLANE DETAILS</th>
</tr>
</thead>
<tbody>
";
while ($row = mysqli_fetch_array($result)) {
    $airid = $row['AIR_ID'];
    $coach = $row['Fight_NO'];
    $class = $row['CLASS'];
    $seat = $row['SEAT_TYPE'];
    echo "
    <tr>
    <td class='text-left text-success'><b>AIRPLANE ID</b>: $airid <br><b>FIGHT NO</b>: $coach <br><b>CLASS</b>: $class <br><b>SEAT TYPE</b>: $seat </td> 
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
        $('#buslist').DataTable();
    });
    $('#buslist').dataTable({
        "order": [],
        "lengthMenu": [5, 10, 25, 50, 75, 100]
    });
</script>