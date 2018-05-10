<?php
include('config.php');
  // define('DB_SERVER', '127.0.0.1');
  // define('DB_USERNAME', 'root');
  // define('DB_PASSWORD', '');
  // define('DB_DATABASE', 'merita');
  // $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  // session_start();

  // if($_SERVER["REQUEST_METHOD"] == "POST") {

    //  $myusername = mysqli_real_escape_string($db,$_POST['username']);
    //  $mypassword = mysqli_real_escape_string($db,$_POST['password']);

    //  $sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
    //  $result = mysqli_query($db,$sql);

	//  $json_response = array();


//$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//$row_array = $row['id'];


     // if($row_array == 1)
      //  echo file_get_contents("admin.html");
     // else
       //  echo "login unsuccessful";}

  // else if($_SERVER["REQUEST_METHOD"] == "POST") {

    //  $myusername = mysqli_real_escape_string($db,$_POST['username']);
    //  $mypassword = mysqli_real_escape_string($db,$_POST['password']);

     // $sql1 = "SELECT id FROM senior WHERE username = '$myusername' and password = '$mypassword'";
     // $result1 = mysqli_query($db,$sql1);

	//  $json_response = array();


//$row = mysqli_fetch_array($result1, MYSQLI_ASSOC);
//$row_array1 = $row['id'];


    //  if($row_array1 == 1)
      //  {echo "login successful";
      //  echo file_get_contents("senior.html");}
     // else
      //   echo "login unsuccessful";
 //  }

?>

<html>
<head>
  <title >Interview Buddy</title>
<link rel="stylesheet" href="honey.css">
<script src="honey.js"></script>
</head>

<body style="background-image:url('images/key.jpg');background-repeat: no-repeat;background-size:  cover;">

<center><font>Interview Buddy<font></center>
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;margin-left:300px;margin-top:100px">Admin Login</button>
  <div id="id01" class="modal">

    <form name="login" class="modal-content animate" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

      <div class="container">

                <label>UserName  :</label><input type = "text" name = "uname" class = "box"/><br /><br />

                <label>Password  :</label><input type = "password" name = "upass" class = "box" /><br/><br />
                    <button name="submit" type="submit">Login</button>


        <label>
          <input type="checkbox" checked="checked"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>


      </div>
    </form>

<?php
if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$upass=$_POST['upass'];
if($uname=="admin" and $upass=="admin")
{

echo '<script>alert("Login success.");</script>';
echo '<meta http-equiv="refresh" content="0;url=add.php">';
}
else
{
echo "<script type='text/javascript'>alert('You are not authorised user');</script>";
}
}
?>
  </div>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Seniors Login</button>

<div id="id02" class="modal">

  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>

    <div class="container">
      <label>UserName  :</label><input type = "text" name = "uname" class = "box"/><br /><br />

                 <label>Password  :</label><input type = "password" name = "psw" class = "box" /><br/><br />
                    <button name="login" type="submit">Login</button>

         <label>
        <input type="checkbox" checked="checked"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>

    </div>
  </form>


<?php
if(isset($_POST['login']))
{
	$uname=$_POST['uname'];
	$psw=$_POST['psw'];
	$select=mysql_query("select * from seniors where uname='$uname' and psw='$psw'") or die(mysql_error());
	$count=mysql_num_rows($select);
	if($count)
	{

		header('location:postt.php');
	}
	else
	{
		echo '<script>alert("Invalid username or password");</script>';
	}
}
ob_end_flush();
?>
</div>
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Juniors Login</button>
<div id="id03" class="modal">

  <form action="viewpost.php" class="modal-content animate" >
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

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>

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


<button onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Faculty Login</button>

<div id="id04" class="modal">

  <form class="modal-content animate" action="vcomp.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button name="flogin" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked"> Remember me
      </label>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>

    </div>
  </form>
</div>

<?php
if(isset($_POST['flogin']))
{
	$uname=$_POST['uname'];
	$psw=$_POST['psw'];
	$select=mysql_query("select * from faculty where uname='$uname' and psw='$psw'") or die(mysql_error());
	$count=mysql_num_rows($select);
	if($count)
	{

		header('location:vcomp.php');
	}
	else
	{
		echo '<script>alert("Invalid username or password");</script>';
	}
}

?>

<button onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Alumni Login</button>

<div id="id05" class="modal">

  <form action="postt.php"  class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button name="alogin" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked"> Remember me
      </label>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id05').style.display='none'" class="cancelbtn">Cancel</button>

    </div>
  </form>

<?php
if(isset($_POST['alogin']))
{
	$uname=$_POST['uname'];
	$psw=$_POST['psw'];
	$select=mysql_query("select * from alumni where uname='$uname' and psw='$psw'") or die(mysql_error());
	$count=mysql_num_rows($select);
	if($count)
	{

		header('location:postt.php');
	}
	else
	{
		echo '<script>alert("Invalid username or password");</script>';
	}
}
ob_end_flush();
?>

</div>

</body>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    // Get the modal
    var modal = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        // Get the modal
        var modal = document.getElementById('id03');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            // Get the modal
            var modal = document.getElementById('id04');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
                var modal = document.getElementById('id05');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }

</script>
</html>
