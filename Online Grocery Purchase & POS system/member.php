<?php
    include_once 'database.php';

    $firstname = $_POST['First_Name'];
    $lastname = $_POST['Last_Name'];
    $email = $_POST['Email_ID'];
    $Address = $_POST['Street_Address'];
    $subtown = $_POST['Suburb/Town'];
    $postcode = $_POST['Postcode'];
    $phoneno = $_POST['Phone_Number'];


    $sql = "INSERT INTO memdetails (FirstName, LastName, Email, Address, Suburb, Postcode, PhNum) 
    VALUES ('$firstname', '$lastname', '$email', '$Address', '$subtown', '$postcode', '$phoneno');";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();

?>