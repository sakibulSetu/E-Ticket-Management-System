<?php
if (isset($_SESSION['user'])) {
  $user = $_SESSION["user"];
  $user_id = $_SESSION["user_id"];
  if ($user == 'admin') {
    echo "  
    <br>
    <ul class='nav flex-column nav-pills nav-fill'>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='registerowner.php'>Register Bus Owner</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='trainregisterowner.php'>Register Train Owner</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='airregisterowner.php'>Register Air Owner</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='listofowners.php'>List of Owners</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='listofcounters.php'>List of Counters</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='listofpayment.php'>List of Payments</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='resetpass.php'>Reset Password</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../'>Search Bus</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../all/bookedbustickets.php'>Booked Bus Tickets</a>
      </li><br>
    </ul>
    <br>
    ";
  } else if ($user == 'owner') {
    echo "  
    <br>
    <ul class='nav flex-column nav-pills nav-fill'>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../all/bookedbustickets.php'>Booked Bus Tickets</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../all/donepayment.php'>Online Payments</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='addcounter.php'>Add Counter</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='addbus.php'>Add Bus</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='addschedule.php'>Schedule Bus</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='ownercounters.php'>List of Counters</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='ownerbuses.php'>List of Buses</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='ownerschedules.php'>List of Scheduled Buses</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../'>Search Bus</a>
      </li><br>
    </ul>
    <br>
    ";
  } else if ($user == 'TRAINowner') {
    echo "  
    <br>
    <ul class='nav flex-column nav-pills nav-fill'>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../all/bookedtraintickets.php'>Booked TRAIN Tickets</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../all/donepayment.php'>Online Payments</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='addcounter.php'>Add Counter</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='addtrain.php'>Add Train</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='addtrainschedule.php'>Schedule Train</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='trainownercounters.php'>List of Counters</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='ownertrains.php'>List of Trains</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='trainownerschedules.php'>List of Scheduled Trains</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../'>Search Train</a>
      </li><br>
    </ul>
    <br>
    ";
  } else if ($user == 'AIRowner') {
    echo "  
    <br>
    <ul class='nav flex-column nav-pills nav-fill'>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../all/bookedairtickets.php'>Booked AIR Tickets</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../all/donepayment.php'>Online Payments</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='addcounter.php'>Add Counter</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='addair.php'>Add AIR</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='addairschedule.php'>Schedule AIR</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='airownercounters.php'>List of Counters</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='ownerairs.php'>List of AIRs</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='ownerschedules.php'>List of Scheduled Buses</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../'>Search Air</a>
      </li><br>
    </ul>
    <br>
    ";
  } else if ($user == 'counter') {
    echo "  
    <br>
    <ul class='nav flex-column nav-pills nav-fill'>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../all/bookedbustickets.php'>Booked Bus Tickets</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../all/donepayment.php'>Online Payments</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='availablebus.php'>Available Bus</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../'>Search Bus</a>
      </li><br>
    </ul>
    <br>
    ";
  } else if ($user == 'user') {
    echo "  
    <br>
    <ul class='nav flex-column nav-pills nav-fill'>
      <li class='nav-item'>
        <a class='nav-link active bg-info' href='../all/bookedbustickets.php'>Booked Bus Tickets</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-info' href='../all/donepayment.php'>Online Payments</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../'>Book Bus Ticket</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../'>Book Train Ticket</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../'>Book Air Ticket</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../'>Book Launch Ticket</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../'>Book Movie Ticket</a>
      </li><br>
      <li class='nav-item'>
        <a class='nav-link active bg-secondary' href='../'>Book Hotel</a>
      </li><br>
    </ul>
    <br>
    ";
  }
}
