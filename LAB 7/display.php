<?php

$name = $_POST['fname'] . "&nbsp" . $_POST['lname'];
$month = $_POST['Month'] ;
$day = $_POST['Days'];
$year = $_POST['Year'];
$gender = $_POST['gender'];
$address = $_POST['Address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];



?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table{
          border: 2px solid black;
      }
  </style>
</head>
<body>

    <h2>Your Information</h2>


    <table style="width:40%">
     <tr>
        <th>Name:</th>
        <td><?php echo $name ?></td>
    </tr>
    <tr>
        <th >Date of birth:</th>
        <td><?php echo $day. "/" . $month.  "/" . $year?></td>
    </tr>
    <tr>
        <th > Gender :</th>
        <td><?php echo $gender ?></td>
    </tr>
    <tr>
        <th > Address :</th>
        <td><?php echo $address?></td>
    </tr>
    <tr>
        <th > City :</th>
        <td><?php echo $city?></td>
    </tr><tr>
        <th > State :</th>
        <td><?php echo $state?></td>
    </tr><tr>
        <th > Zip :</th>
        <td><?php echo $zip?></td>
    </tr>
    <tr>
        <th > Phone :</th>
        <td><?php echo $phone?></td>
    </tr>


</body>
</html>
