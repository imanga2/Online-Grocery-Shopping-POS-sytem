<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href= "stylePages.css" rel="stylesheet" />
    <title>Delete Member Details</title>
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
            <a href="add_member.php"><button class="button">Add Member Details</button></a>
            <a href="searchmember.php"><button class="button">Search Member Details</button></a>
            <a href="remove_member.php"><button class="button">Delete Member Details</button></a>
            <a href="update_member.php"><button class="button">Modify Member Details</button></a>
        </p>
    </div>

    <h2>Delete Member Form</h2>
    
    <form action="remove_member.php" method="POST">
    <fieldset>
        <legend class="legendtext"> Remove Member&nbsp</legend>
        <p><label for="Member_ID">Member ID</label>
        <input type="text" name= "Member_ID" id="Member_ID" required="required" maxlength="25" size="20"/> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </fieldset>
    <p><input id="clickme1" type="submit" value="Remove Member" class="button1" />
    <input type="reset" value="Clear" class="button2"/></p>

    </form>
    <?php
    include_once 'database.php';

    if (isset($_POST['Member_ID'])) {
        $search = $_POST['Member_ID'];
    
    $sql = "DELETE FROM memdetails WHERE member_ID = $search;";
    if ($conn->query($sql) === TRUE) {
        
        echo "<script>alert('Member Required Deleted');</script>";
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