<?php
include('config.php');

?>

<html>
<head>
  <link rel="stylesheet" href="honey.css">
</head>
<body style="background-image:url('images/bla.jpg');background-repeat: no-repeat;background-size:  cover;">
<a href="reject.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">View post</button></a>
<a href="delete.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">View shared text</button></a>
<a href="index.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Logout</button></a>
<div class="main">
<div class="container">
<h2 style="color:white">COMPANY DETAILS</h2>
<hr>
<table class="table">
<tr>
<th>Company name</th>
<th>Designation</th>
<th>Experience</th>
<th>Degree</th>

<th>Salary</th>


<th>Technology</th>
</tr>

<?php 
$select=mysql_query("select * from request");
while($row=mysql_fetch_array($select))
{
	$cmpname=$row['cmpname'];
	$designation=$row['designation'];
	$experience=$row['experience'];
	$degree=$row['degree'];

	$salary=$row['salary'];

	$technology=$row['technology'];
	echo '<tr> <td>'.$cmpname.'</td>';
	echo '<td>'.$designation.'</td>';
	echo '<td>'.$experience.'</td>';
	echo '<td>'.$degree.'</td>';
	
		echo '<td>'.$salary.'</td>';	
	
			echo '<td>'.$technology.'</td></tr>';	

}
?>
</table>
</div>
</div>


</body>
</html>