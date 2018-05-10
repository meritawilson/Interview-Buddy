<?php
include('config.php');

?>

<html>
<head>
  <link rel="stylesheet" href="honey.css">
</head>
<body style="background-image:url('images/details.jpg');background-repeat: no-repeat;background-size:  cover;">

<a href="viewpost.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Back</button></a>

<a href="index.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Logout</button></a>
<div class="main">
<div class="container">
<h2 style="color:white">Posts</h2>
<hr>

<?php
$select=mysql_query("select * from text");
echo '<table class="table">';
echo'<tr><th>SL NO</th><th>COMPANY NAME</th><th>NAME</th><th>TEXT</th></tr>';
while($row=mysql_fetch_array($select))
{
	$id=$row['id'];
	$cmpname=$row['cmpname'];
	$sname=$row['sname'];
	$text=$row['text'];
		echo '<tr>';
		echo '<td>' .$id.' </td>';

		echo '<td>'.$cmpname.' </td>';

		echo '<td>' . $sname.' </td>';
			echo '<td>' .$text.' </td>';

		echo '</tr>';


			}
			echo'</table>';

?>

</div>
</div>


</body>
</html>
