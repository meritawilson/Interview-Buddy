<?php
include('config.php');
  // define('DB_SERVER', '127.0.0.1');
 //  define('DB_USERNAME', 'root');
 //  define('DB_PASSWORD', '');
 //  define('DB_DATABASE', 'merita');
  // $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 //  session_start();

 //  if($_SERVER["REQUEST_METHOD"] == "POST") {

  //    $myusername = mysqli_real_escape_string($db,$_POST['uname']);
  //    $mypassword = mysqli_real_escape_string($db,$_POST['psw']);
  //    $mypassword2 = mysqli_real_escape_string($db,$_POST['psw2']);

  //    $qsql = "SELECT max(id) FROM admin";
   //   $result = mysqli_query($db,$qsql);

      
   //   if($mypassword==$mypassword2)
   //   {
   //   $sql = "INSERT INTO admin VALUES('$myusername','$mypassword',1)";
    //  mysqli_query($db,$sql);
   // }
   // else
   //   echo "mismatch";

  // }

?>

<html>
<head>
  <link rel="stylesheet" href="honey.css">
</head>
<body>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">click here to Register</button>

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



      <button name="reg" type="submit">Register</button>
      <label>
        <input type="checkbox" checked="checked"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

    </div>
  </form>
  	   		<?php 
if(isset($_POST['reg']))
{
$uname=$_POST['uname'];
$psw=$_POST['psw'];
$psw2=$_POST['psw2'];
$register=mysql_query("insert into alumni(uname,psw,psw2)values('$uname','$psw','$psw2')");
if($register)
{
	echo '<script>alert("Registration success");</script>';
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
