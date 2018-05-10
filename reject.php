<?php
include('config.php');

?>

<html>
<head>
  <link rel="stylesheet" href="honey.css">
</head>
<body style="background-image:url('images/better.jpg');background-repeat: no-repeat;background-size:  cover;">



<a href="vcomp.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Back</button></a>
<a href="index.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Logout</button></a>

      <h1>POST DETAILS</h1><hr>
      <div class="container">



                    <table class="table table-hover" id="dev-table">

      <tr class="success">

      <th>DOCUMENT NAME</th>
     <th>PAPERS</th>

		  		  <th>ACTION</th>


       </tr>
        <?php
$select="select * from question";
$query=mysql_query($select);

while ($row=mysql_fetch_assoc($query))
{
$subject=$row['subject'];
$sem=$row['sem'];
$qb=$row['qb'];
$sid=$row['id'];

?>
      <tr class="warning">

     <form method="post">
	         <input type="hidden" name="sid" value="<?php echo $sid;?>"/>
			     <input type="hidden" name="sname" value="<?php echo $subject;?>" />
	 <td> <?Php echo $sem;?></td>
      <td><?Php echo $qb;?></td>


      <td><input type="submit" class="btn-primary" name="reject" value="Delete" /></td>
    </form>
      </tr>
      <?php }?>
      </table>
  </div><!--color-->

 <?php
if(isset($_POST['reject']))
{
    $vname=$_POST['sname'];
	$vid=$_POST['sid'];
	$sql=mysql_query("delete from question where id='$vid'");
	  if($sql)
	  {
	  echo '<script>alert("Post removed!");</script>';
	  }

}
?>
</body>
</html>
