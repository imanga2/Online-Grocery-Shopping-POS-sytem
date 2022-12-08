<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
<style>
  #login{
    background-color: #04AA6D;
  color: white;
  }
  #login:hover{
    background-color: green;
    color:black;
  }
  #cancel{
    background-color: red;
    color: white;
  }
  #cancel:hover{
    background-color: rgb(185, 16, 16);
    color:#000;
  }
    h1{
        color: whitesmoke;
        font-size: 85px;
        
    }
    .a{
      text-align: center;
  position: absolute;
  top: 25%;
  width: 100%;
  opacity: 80%;
    }
    body{
        
  background-image: url("imgb.jpg");
  background-repeat: no-repeat;
  background-position: middle;
  background-size: 100%;
  background-attachment: fixed;
    }
    .button {
   background-color: rgb(68, 65, 65);
   border: none;
   color: white;
   padding: 15px 32px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 4px 2px;
   cursor: pointer;
   transition-duration: 0.4s;
   border-radius: 12px;
 }
 .button:hover {
  background-color: black;
  color: lightgrey;
  
}
.button1 {
  width: auto;
  padding: 5px 10px;
  display: inline-block;
  border-radius: 12px;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
  background-color: beige;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 15px;
  background-color: beige;
}

span.psw {
  float: right;
  padding-top: 16px;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5px auto; /* 15% from the top and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
  height: 50%;
}

/* The Close Button */
.close {
  /* Position it in the top right corner outside of the modal */
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

/* Close button on hover */
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}
</style>
<script>
  // Get the modal
  var modal = document.getElementById('id01');
  var modal1 = document.getElementById('id02');
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
    else if(event.target == modal1) {
      modal.style.display = "none";
    }
  }
  </script>
</head>
<body>
  <div class="a">
    <h1>Welcome To GoTo Grocery</h1><br>
    <button onclick="document.getElementById('id01').style.display='block'" class="button">Manager Login</button>
    <button onclick="document.getElementById('id02').style.display='block'"type="button" class="button">Staff Login</button>
  </div>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="manager_homepage.php">
    <div class="imgcontainer">
      <img src="imgm.jfif" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter User" name="uname" >
      <br><br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" >
      <br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <a href="manager_homepage.php"><button type="submit" class="button1" id="login">Login</button></a>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="button1" id="cancel">Cancel</button>
    </div>
  </form>
</div>
<!-- The Staff Modal -->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Staff Modal Content -->
  <form class="modal-content animate" action="staff_homepage.php">
    <div class="imgcontainer">
      <img src="imgm.jfif" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Enter User</b></label>
      <input type="text" placeholder="Enter User" name="uname" >
      <br><br>
      <label for="psw"><b>User Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" >
      <br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
	<a href="staff_homepage.php"><button type="submit" class="button1" id="login">Login</button></a>
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="button1" id="cancel">Cancel</button>
    </div>
  </form>
</div>
</body>
</html>