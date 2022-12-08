<?php
    include_once 'database.php';

    $Postcode = $_POST['Postcode'];
    $search = $_POST['Member_ID'];
    $sql = "UPDATE memDetails SET Postcode = $Postcode WHERE member_ID = $search;";
    if ($conn->query($sql) === TRUE) {
        echo "Record Modified";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
      
?>