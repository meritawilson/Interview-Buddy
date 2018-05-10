<?php
include('config.php');
?>
<html>
<head>
  <title>HONEYCOMB</title>
<link rel="stylesheet" href="honey.css">
<script src="honey.js"></script>
</head>
<body>
<center><font>HoneyComb<font></center>
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Juniors Login</button>
<div id="id03" class="modal">

  <form class="modal-content animate" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button name="jlogin"type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked"> Remember me
      </label>
	        <span class="reg">New Register<a href="juniorreg.php">Here</a></span>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>


<?php 
if(isset($_POST['jlogin']))
{
	$uname=$_POST['uname'];
	$psw=$_POST['psw'];
	$select=mysql_query("select * from juniors where uname='$uname' and psw='$psw'") or die(mysql_error());
	$count=mysql_num_rows($select);
	if($count)
	{
	
		header('location:viewpost.php');
	}
	else
	{
		echo '<script>alert("Invalid username or password");</script>';
	}
}

?>
</div>