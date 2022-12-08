<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href= "stylePages.css" rel="stylesheet" />
    <title>Search Member</title>

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

    <h2>Search Member Form</h2>
    
    
    <form method="POST">
        <fieldset>
            <legend class="legendtext"> Member Details &nbsp</legend>
            <p><label for="First_Name">Member Name (First or Last)</label>
            <input type="text" name= "Name_Value" id="Name_Value" required="required" maxlength="25" size="30" pattern="^[a-zA-Z ]+$"/> 
        </fieldset>

        <p>
            <input type="submit" name="Search_Member" value="Search Member" class="button" />
            <input type="reset" value="Clear" class="button"/>
        </p>

        </form>

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