<?php
include('config.php');

?>

<html>
<head>
  <link rel="stylesheet" href="honey.css">
</head>
<body style="background-image:url('images/lap.jpg');background-repeat: no-repeat;background-size:  cover;">
<a href="company.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Company details</button></a><a href="text.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Share text</button></a><a href="index.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Logout</button></a>
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
<div class="wrapper">
<div class="container">
				<div class="row">
<div class="col-md-12">
                <br />
				</div>				
                <div class="col-md-6">
				<h1 >Add Interview Papers</h1>
				<form class="login" role="form" method="post" action="" enctype="multipart/form-data">
				<div class="form-group">
								<label>Subject</label>
								<input type="text" class="form-control" placeholder="Subject" name="subject">
							
                                <label>Type</label>
                                <input type="text" class="form-control" placeholder="Type" name="sem">
								
								
								<label>File</label>
								<input type="file" name="qb"  />
							
							</div>

							<button type="submit" class="btn btn-two" name="submit">Submit</button><p><br/></p>
						</form>
						</div>
						<div class="col-md-12">
</div>
				
				</div>
				</div>
				</div>

<?php
if(isset($_POST['submit']))
{
$subject=$_POST['subject'];
$sem=$_POST['sem'];
$qb=$_FILES['qb']['name'];

$tmpqb=$_FILES['qb']['tmp_name'];

move_uploaded_file($tmpqb,"upload/$qb");


mysql_query("insert into question(subject,sem,qb)values('$subject','$sem','$qb')")or die(mysql_error());
echo "<script type='text/javascript'>alert('Added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=viewquestion.php">';
}

?>		

</body>
</html>
