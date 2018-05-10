<?php
include('config.php');

?>

<html>
<head>
  <link rel="stylesheet" href="honey.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body style="background-image:url('images/whi.jpg');background-repeat: no-repeat;background-size:  cover;">
<a href="index.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Logout</button></a>
<a href="postt.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Back</button></a>
<div class="wrapper">
<div class="container">
				<div class="row">
				<div class="col-md-3">

				</div>

                <div class="col-md-6">
				<h1 >Share text</h1>
				<form class="login" role="form" method="post" action="" enctype="multipart/form-data">
				<div class="form-group">
 <label>Attended Company name</label><br />
 <input class="form-control" type="text" name="cmpname" placeholder="Enter Company name" /><br><br>
 <label>Senior name</label><br />
 <input class="form-control" type="text" name="sname" placeholder="Enter name" /><br><br>
  <label>Share text</label><br />
 <textarea class="form-control" type="text" name="text" placeholder="Enter.. "style="width:400px;height:150px" /></textarea><br><br>

							</div>

							<button type="submit" class="btn btn-two" name="post">Submit</button><p><br/></p>
</form>
						</div>
						<div class="col-md-3">
</div>

				</div>
				</div>
				</div>

<?php
if(isset($_POST['post']))
{
$cmpname=$_POST['cmpname'];
$sname=$_POST['sname'];
$text=$_POST['text'];



$sql="insert into text(cmpname,sname,text)values('$cmpname','$sname','$text')";
$exe=mysql_query($sql);
if($exe)
{
	?>
    <script>alert("Text posted successfully.");</script>
    <?Php
}
else
{
	?>
    <script>alert("Problem posting Eligibility.");</script>
    <?php

}
}
?>

</body>
</html>
