<?php
include('config.php');

?>

<html>
<head>
  <link rel="stylesheet" href="honey.css">
</head>
<body style="background-image:url('images/blue1.jpg');background-repeat: no-repeat;background-size:  cover;">
<a href="viewcomp.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">View company details</button></a>

<a href="viewtext.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">View text shared</button></a>
<a href="index.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Logout</button></a>
<div class="wrapper">
<div class="container">
				<div class="row">
<div class="col-md-12">
                <br />
				</div>
                <div class="col-md-6">
				<h1>View Interview papers</h1>
						</div>
						<div class="col-md-12">
						<form class="login" role="form" method="post" action="">
				<div class="form-group">
						<label>Select Subject:</label>
						<select name="subject" class="form-control">
						<?php
						$v=mysql_query("SELECT distinct(subject) FROM question");
				while($k=mysql_fetch_array($v))
				{
				$subject=$k['subject'];
				echo "<option value='$subject'>$subject</option>";
				}
				?>
								</select>
								</div><br><br>


								<div class="form-group">
						<label>Select type:</label>
						<select name="sem" class="form-control">
						<?php
						$v=mysql_query("SELECT distinct(sem) FROM question");
				while($k=mysql_fetch_array($v))
				{
				$sem=$k['sem'];
				echo "<option value='$sem'>$sem</option>";
				}
				?>
								</select>
								</div><br><br>


<button type="submit" class="btn btn-two" name="submit">Submit</button><p><br/></p>
</form>
</div>
				<?php
				if(isset($_POST['submit']))
				{
				$subject=$_POST['subject'];
				$sem=$_POST['sem'];


				echo "<table align='left' cellpadding='10' cellspacing='5' border='1' width='100%' class='qtbl'>";
				echo "<thead><tr><td>Subject</td><td>Papers</td><td>Download</td></tr></thead>";
				$n=0;
				$q=mysql_query("SELECT * FROM  question where sem='$sem' and subject='$subject'");
				while($r=mysql_fetch_array($q))
				{
				$n++;
				$qb=$r['qb'];
				echo "<tr><td>$subject</td><td>$sem</td><td><a href='upload/$qb' target='_blank'>Download</a></td></tr>";
				}
				echo "</table>";
				}
				?>
				</div>

				</div>
				</div>

</body>
</html>
