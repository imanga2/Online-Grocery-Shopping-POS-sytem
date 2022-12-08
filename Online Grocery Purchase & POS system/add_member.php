<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href= "stylePages.css" rel="stylesheet" />
    <title>Add Member</title>
    <script src="myscript.js"></script>
</head>
<body>
    <div id="header">
        <div id="titleboxone"></div>
            <div id="titleboxtwo">
                <h1 id="titleheading">Goto Grocery</h1>
            </div>
        </div>

    <div id="navbarbg">
        <p id="navbartext">
            <a href="manager_homepage.php"><button class="button">Home Page</button></a>
            <a href="#add_member.php"><button class="button">Add Member Details</button></a>
            <a href="searchmember.php"><button class="button">Search Member Details</button></a>
            <a href="remove_member.php"><button class="button">Delete Member Details</button></a>
            <a href="update_member.php"><button class="button">Modify Member Details</button></a>
        </p>
    </div>

    <h2>Add Member Form</h2>
    
    <form action="add_member.php" method="POST">
    <fieldset>
        <legend class="legendtext"> Personal Details &nbsp</legend>
        <p><label for="First_Name">First Name</label>
        <input type="text" name= "First_Name" id="First_Name" required="required" maxlength="25" size="30" pattern="^[a-zA-Z ]+$"/> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="Last_Name">Last Name</label>
        <input type="text" name= "Last_Name" id="Last_Name" required="required" maxlength="25" size="30" pattern="^[a-zA-Z ]+$" /></p>
        <p><label for="Email_ID">Email Address</label>
        <input type="email" name= "Email_ID" id="Email_ID" required="required" size="30" placeholder="name@example.com" /></p>
    </fieldset>

    <fieldset>
        <legend class="legendtext">Address &nbsp</legend>
        <p><label for="Street_Address">Street Address</label>
        <input type="text" name= "Street_Address" id="Street_Address" required="required" maxlength="40" size="40" /></p>
        <p><label for="Suburb/Town">Suburb/Town</label>
        <input type="text" name= "Suburb/Town" id="Suburb/Town" required="required" maxlength="20" size="20" /></p>
        <p><label for="Postcode">Postcode</label>
        <input type="text" name= "Postcode" id="Postcode" required="required" size="10" maxlength="4" /></p>
    </fieldset>

    <fieldset>
        <legend class="legendtext">Contact Details &nbsp</legend>
        <p><label for="Phone_Number">Phone Number</label>
        <input type="tel" name= "Phone_Number" id="Phone_Number" required="required" size="20" maxlength="10" pattern="\d{10}" placeholder="(##) ####-####" />
        </p>
        <p><label>Preferred Contact</label><br />
        <input type="radio" name="Preferred_Contact" value="Email" required="required" checked="checked" />Email
        <input type="radio" name="Preferred_Contact" value="Post" required="required" />Post
        <input type="radio" name="Preferred_Contact" value="Phone" required="required" />Phone
    </fieldset>

    <p><input id="clickme1" type="submit" value="Add Member" class="button1" />
    <input type="reset" value="Clear" class="button2"/></p>

    </form>
    <?php
    include_once 'database.php';
    if (isset($_POST['First_Name'])) {
    $firstname = $_POST['First_Name'];
    }
    if (isset($_POST['Last_Name'])) {
        $lastname = $_POST['Last_Name'];
    }
    if (isset($_POST['Email_ID'])) {
        $email = $_POST['Email_ID'];
    }
    if (isset($_POST['Street_Address'])) {
        $Address = $_POST['Street_Address'];
        }
    if (isset($_POST['Suburb/Town'])) {
        $subtown = $_POST['Suburb/Town'];
    }
    if (isset($_POST['Postcode'])) {
        $postcode = $_POST['Postcode'];
    }
    if (isset($_POST['Phone_Number'])) {
        $phoneno = $_POST['Phone_Number'];
    }
    
    if(isset($_POST['Phone_Number'], $_POST['Postcode'], $_POST['Suburb/Town'], $_POST['Street_Address'], $_POST['Email_ID'], $_POST['Last_Name'],$_POST['First_Name']  )){
    $sql = "INSERT INTO memdetails (FirstName, LastName, Email, Address, Suburb, Postcode, PhNum) 
    VALUES ('$firstname', '$lastname', '$email', '$Address', '$subtown', '$postcode', '$phoneno');";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Member Added');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
    }
      ?>

    <footer>
        <div class="imgcontainer">
            <img src="imgm.jfif" alt="Avatar" class="avatar">
          </div>
        <p id="footertext">
             <a id="whitelink">Swinions</a>
             <br/>
             &copy; All Rights Reserved
        </p>
    </footer>
</body>
</html>