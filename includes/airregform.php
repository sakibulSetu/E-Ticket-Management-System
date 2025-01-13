<br>
<h1 class='text-info'>ADD YOUR AIRWAYS HERE!</h1>
<br>
<form target="_self" enctype="multipart/form-data" method="POST">
    <div class="col">
        <div class="form-group">
            <label for="coach">FIGHT NO</label>
            <input type="text" class="form-control" id="fight" name="fight" required>
        </div>
        <div class="form-group">
            <label for="class">CLASS</label>
            <input type="text" class="form-control" id="class" name="class">
        </div>
        <div class="form-group">
            <label for="seat">SEAT TYPE</label>
            <select class="form-control" id="seat" name="seat" required>
                <option value="">SELECT SEAT TYPE</option>
                <?php
                $query = "SELECT SEAT_TYPE FROM busseatlist";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                    $type = $row['SEAT_TYPE'];
                    echo "<option value='$type'>$type</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <br><button type="submit" class="btn btn-outline-warning" value="ADD" name="add">ADD Airplane</button><br>
</form>
<br>

<?php
if (isset($_POST['add'])) {
    $owner = "$user_id";
    $fight = $_POST['fight'];
    $class = $_POST['class'];
    $seat = $_POST['seat'];
    $air_id = "$owner" . '-' . "$fight";
    $query = "INSERT INTO airlist (AIR_ID,OWNER,Fight_NO,CLASS,SEAT_TYPE) VALUES ('$air_id','$owner','$fight','$class','$seat')";

    if (mysqli_query($con, $query)) {
        echo "<script>alert('Successfully Added Airplane ( $air_id )')</script>";
    } else {
        echo "<div class='text-danger'> Registration error! </div>" . mysqli_error($con);
    }
}
