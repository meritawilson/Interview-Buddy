<?php
include('config.php');

?>

<html>
<head>
  <link rel="stylesheet" href="honey.css">
</head>
<body style="background-image:url('images/l.jpg');background-repeat: no-repeat;background-size:  cover;">
<a href="text.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Share text</button></a>
<a href="index.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Logout</button></a>
<div class="wrapper">
<div class="container">
				<div class="row">
<div class="col-md-3">
                <br />
				</div>				
                <div class="col-md-6">
				<h1 >Add Question Bank</h1>
				<form class="login" role="form" method="post" action="" enctype="multipart/form-data">
				<div class="form-group">
								<label>Subject</label>
								<input type="text" class="form-control" placeholder="Subject" name="subject">
							
                                <label>Sem</label>
                                <input type="text" class="form-control" placeholder="Sem" name="sem">
								
								
								<label>File</label>
								<input type="file" name="qb"  />
							
							</div>

							<button type="submit" class="btn btn-two" name="submit">Submit</button><p><br/></p>
						</form>
						</div>
						<div class="col-md-3">
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
echo "<script type='text/javascript'>alert('Question added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=viewquestion.php">';
}

?>		

</body>
</html>
