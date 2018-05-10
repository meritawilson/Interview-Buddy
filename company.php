<?php
include('config.php');

?>

<html>
<head>
  <link rel="stylesheet" href="honey.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body style="background-image:url('images/or.jpg');background-repeat: no-repeat;background-size:  cover;">
<a href="index.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Logout</button></a>
<a href="postt.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Back</button></a>
<div class="wrapper">
<div class="container">
				<div class="row">
				<div class="col-md-3">

				</div>

                <div class="col-md-6">
				<h1 >Add company details</h1>
				<form class="login" role="form" method="post" action="" enctype="multipart/form-data">
				<div class="form-group">
 <label>Company name</label><br />
 <input class="form-control" type="text" name="cmpname" placeholder="Enter Company name" />
         <label>Designation</label><br />
      <input type="text"  class="form-control" name="designation" placeholder="Enter designation" />

	         <label>Salary </label><br />
      <input type="text" class="form-control" name="salary" placeholder="Enter salary" />
	        <label>Degree </label>
      <select name="degree" class="form-control">
     <option value="">Select</option>
        <option value="Diplomo">Diplomo</option>
     <option value="UG">UG</option>
     <option value="PG">PG</option>
     <option value="Any degree">Any degree</option>
     </select><br><br>
	        <label>Working type</label>
     <select name="type" class="form-control">
     <option value="">Select</option>
     <option value="Full time">Full time</option>
     <option value="Rotational shift">Intern</option>
     </select><br><br>

	      <label>Experience</label>
     <select name="experience" class="form-control">
<option value="Fresher">Fresher</option>
<option value="6 Months">6 Months</option>
<option value="1 year">1 year</option>
<option value="More than 1 year">More than 1 year</option>
</select><br><br>
     <label>Technology</label><br />
      <input type="text" class="form-control" name="technology" placeholder="Enter technology" />



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
$salary=$_POST['salary'];
$designation=$_POST['designation'];

$type=$_POST['type'];
$degree=$_POST['degree'];

$experience=$_POST['experience'];
$technology=$_POST['technology'];

$sql="insert into request(cmpname,designation,degree,salary,type,experience,technology)values('$cmpname','$designation','$degree','$salary','$type','$experience','$technology')";
$exe=mysql_query($sql);
if($exe)
{
	?>
    <script>alert("Requirements posted successfully.");</script>
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
