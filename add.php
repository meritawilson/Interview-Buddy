<?php
include('config.php');
  // define('DB_SERVER', '127.0.0.1');
  // define('DB_USERNAME', 'root');
  // define('DB_PASSWORD', '');
  // define('DB_DATABASE', 'merita');
  // $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  // session_start();

  // if($_SERVER["REQUEST_METHOD"] == "POST") {

    //  $myusername = mysqli_real_escape_string($db,$_POST['username']);
    //  $mypassword = mysqli_real_escape_string($db,$_POST['password']);

    //  $sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
    //  $result = mysqli_query($db,$sql);

	//  $json_response = array();


//$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//$row_array = $row['id'];


     // if($row_array == 1)
      //  echo file_get_contents("admin.html");
     // else
       //  echo "login unsuccessful";}

  // else if($_SERVER["REQUEST_METHOD"] == "POST") {

    //  $myusername = mysqli_real_escape_string($db,$_POST['username']);
    //  $mypassword = mysqli_real_escape_string($db,$_POST['password']);

     // $sql1 = "SELECT id FROM senior WHERE username = '$myusername' and password = '$mypassword'";
     // $result1 = mysqli_query($db,$sql1);

	//  $json_response = array();


//$row = mysqli_fetch_array($result1, MYSQLI_ASSOC);
//$row_array1 = $row['id'];


    //  if($row_array1 == 1)
      //  {echo "login successful";
      //  echo file_get_contents("senior.html");}
     // else
      //   echo "login unsuccessful";
 //  }

?>

<html>
<head>
  <title>Interview Buddy</title>
<link rel="stylesheet" href="honey.css">
<script src="honey.js"></script>
</head>
<body style="background-image:url('images/lap.jpg');background-repeat: no-repeat;background-size:  cover;">
<center><font>Interview Buddy<font></center>
<button onclick="document.getElementById('id09').style.display='block'" style="width:auto;;margin-top:100px;margin-left:300px">Add faculty</button>

<div id="id09" class="modal">

  <form name="register" class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id09').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label><b>Re-Enter Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw2" required>
	        <label><b>Enter Contact</b></label>
      <input type="number" placeholder="Enter Contact" name="contact" required>



      <button name="freg" type="submit">Register</button>
      <label>
        <input type="checkbox" checked="checked"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id09').style.display='none'" class="cancelbtn">Cancel</button>

    </div>
  </form>
  	   		<?php
if(isset($_POST['freg']))
{
$uname=$_POST['uname'];
$psw=$_POST['psw'];
$psw2=$_POST['psw2'];
$contact=$_POST['contact'];
$register=mysql_query("insert into faculty(uname,psw,psw2,contact)values('$uname','$psw','$psw2','$contact')");
$reg=mysql_query("insert into users(uname,psw,psw2,contact)values('$uname','$psw','$psw2','$contact')");
if($register && $reg)
{
	echo '<script>alert("Faculty added successfully");</script>';
}
else
{
	echo '<script>alert("Error! Something went wrong!");</script>';
}
}


?>

</div>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add juniors</button>

<div id="id01" class="modal">

  <form name="register" class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label><b>Re-Enter Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw2" required>
	        <label><b>Enter Contact</b></label>
      <input type="number" placeholder="Enter Contact" name="contact" required>


      <button name="jreg" type="submit">Register</button>
      <label>
        <input type="checkbox" checked="checked"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

    </div>
  </form>
  	   		<?php
if(isset($_POST['jreg']))
{
$uname=$_POST['uname'];
$psw=$_POST['psw'];
$psw2=$_POST['psw2'];
$contact=$_POST['contact'];
$register=mysql_query("insert into juniors(uname,psw,psw2,contact)values('$uname','$psw','$psw2','$contact')");
$reg=mysql_query("insert into users(uname,psw,psw2,contact)values('$uname','$psw','$psw2','$contact')");
if($register && $reg)
{
	echo '<script>alert("Students added successfully");</script>';
}
else
{
	echo '<script>alert("Error! Something went wrong!");</script>';
}
}


?>

</div>
<button onclick="document.getElementById('id11').style.display='block'" style="width:auto;">Add seniors</button>

<div id="id11" class="modal">

  <form name="register" class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id11').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label><b>Re-Enter Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw2" required>

	        <label><b>Enter Contact</b></label>
      <input type="number" placeholder="Enter Contact" name="contact" required>

      <button name="sreg" type="submit">Register</button>
      <label>
        <input type="checkbox" checked="checked"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id10').style.display='none'" class="cancelbtn">Cancel</button>

    </div>
  </form>
  	   		<?php
if(isset($_POST['sreg']))
{
$uname=$_POST['uname'];
$psw=$_POST['psw'];
$psw2=$_POST['psw2'];
$contact=$_POST['contact'];
$register=mysql_query("insert into seniors(uname,psw,psw2,contact)values('$uname','$psw','$psw2','$contact')");
$reg=mysql_query("insert into users(uname,psw,psw2,contact)values('$uname','$psw','$psw2','$contact')");
if($register && $users)
{
	echo '<script>alert("Senior added successfully");</script>';
}
else
{
	echo '<script>alert("Error! Something went wrong!");</script>';
}
}


?>

</div>

<button onclick="document.getElementById('id10').style.display='block'" style="width:auto;">Add alumni</button>
<a href="msg.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Send message</button></a>
<a href="index.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Logout</button></a>
<div id="id10" class="modal">

  <form name="register" class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id10').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label><b>Re-Enter Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw2" required>
	        <label><b>Enter Contact</b></label>
      <input type="number" placeholder="Enter Contact" name="contact" required>


      <button name="areg" type="submit">Register</button>
      <label>
        <input type="checkbox" checked="checked"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id10').style.display='none'" class="cancelbtn">Cancel</button>

    </div>
  </form>
  	   		<?php
if(isset($_POST['areg']))
{
$uname=$_POST['uname'];
$psw=$_POST['psw'];
$psw2=$_POST['psw2'];
$contact=$_POST['contact'];
$register=mysql_query("insert into alumni(uname,psw,psw2,contact)values('$uname','$psw','$psw2','$contact')");
$reg=mysql_query("insert into users(uname,psw,psw2,contact)values('$uname','$psw','$psw2','$contact')");
if($register && $reg)
{
	echo '<script>alert("Alumni added successfully");</script>';
}
else
{
	echo '<script>alert("Error! Something went wrong!");</script>';
}
}


?>

</div>
</body>
</html>
