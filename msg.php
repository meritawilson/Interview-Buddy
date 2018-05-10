<?php
include('config.php');

?>

<html>
<head>
  <link rel="stylesheet" href="honey.css">
</head>
<body style="background-image:url('images/.jpg');background-repeat: no-repeat;background-size:  cover;">
<a href="index.php"><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Logout</button></a>
<div align="center">
	<!-- start content -->
	<div id="content2">
	<p>&nbsp;</p>
			<h2> Send message </h2><br><br>
			<form method="post"  enctype="multipart/form-data">

<div class="form-group">
<label>Contact number</label><br /><br>
<input type="text"  placeholder="Enter Mobile no." name="con" required="required" class="form-control" style="height:30px;width:200px" /><br />
</div><br>

<input type="submit"  value="Confirm" name="confirm" class="btn btn-info" />

</form>
<?php
session_start();
error_reporting(0);



									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "honey";

									// Create connection
									mysql_connect($servername, $username, $password);
									mysql_select_db($dbname);


																		// attempt insert query execution
if(isset($_POST['confirm']))
{
	$contact=$_POST['con'];
									$result = mysql_query("select * from users where contact='$contact'");
									while($row=mysql_fetch_array($result))
									{
										$uname=$row['uname'];
										$psw=$row['psw'];




										$result="$uname,$psw";
									}



								$to="$contact";
$msg="You have Been added to Interview Buddy Website Kindly Login Using The Given Username and Password Username and password:$result";

class WAY2SMSClient
{
    var $curl;
    var $timeout = 30;
    var $jstoken;
    var $way2smsHost;
    var $refurl;

    function login($username, $password)
    {
        $this->curl = curl_init();
        $uid = urlencode($username);
        $pwd = urlencode($password);
        // Go where the server takes you :P
        curl_setopt($this->curl, CURLOPT_URL, "http://way2sms.com");
        curl_setopt($this->curl, CURLOPT_HEADER, true);
        curl_setopt($this->curl, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, TRUE);
        $a = curl_exec($this->curl);
        if (preg_match('#Location: (.*)#', $a, $r))
            $this->way2smsHost = trim($r[1]);
        // Setup for login
        curl_setopt($this->curl, CURLOPT_URL, $this->way2smsHost . "Login1.action");
        curl_setopt($this->curl, CURLOPT_POST, 1);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, "username=" . $uid . "&password=" . $pwd . "&Login=Login");
        curl_setopt($this->curl, CURLOPT_COOKIESESSION, 1);
        curl_setopt($this->curl, CURLOPT_COOKIEFILE, "cookie_way2sms");
        curl_setopt($this->curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($this->curl, CURLOPT_MAXREDIRS, 20);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36");
        curl_setopt($this->curl, CURLOPT_CONNECTTIMEOUT, $this->timeout);
        curl_setopt($this->curl, CURLOPT_REFERER, $this->way2smsHost);
        $text = curl_exec($this->curl);
        // Check if any error occured
        if (curl_errno($this->curl))
            return "access error : " . curl_error($this->curl);
        // Check for proper login
        $pos = stripos(curl_getinfo($this->curl, CURLINFO_EFFECTIVE_URL), "main.action");
        if ($pos === "FALSE" || $pos == 0 || $pos == "")
            return "invalid login";
        // Set the home page from where we can send message
        $this->refurl = curl_getinfo($this->curl, CURLINFO_EFFECTIVE_URL);
        /*$newurl = str_replace("ebrdg.action?id=", "main.action?section=s&Token=", $this->refurl);
        curl_setopt($this->curl, CURLOPT_URL, $newurl);*/
        // Extract the token from the URL
        $tokenLocation = strpos($this->refurl, "Token");
        $this->jstoken = substr($this->refurl, $tokenLocation + 6, 37);
        //Go to the homepage
        //$text = curl_exec($this->curl);
        return true;
    }

    function send($phone, $msg)
    {
        $result = array();
        // Check the message
        if (trim($msg) == "" || strlen($msg) == 0)
            return "invalid message";
        // Take only the first 140 characters of the message
        $msg = substr($msg, 0, 140);
        // Store the numbers from the string to an array
        $pharr = explode(",", $phone);
        // Send SMS to each number
        foreach ($pharr as $p) {
            // Check the mobile number
            if (strlen($p) != 10 || !is_numeric($p) || strpos($p, ".") != false) {
                $result[] = array('phone' => $p, 'msg' => $msg, 'result' => "invalid number");
                continue;
            }
            // Setup to send SMS
            curl_setopt($this->curl, CURLOPT_URL, $this->way2smsHost . 'smstoss.action');
            curl_setopt($this->curl, CURLOPT_REFERER, curl_getinfo($this->curl, CURLINFO_EFFECTIVE_URL));
            curl_setopt($this->curl, CURLOPT_POST, 1);
            curl_setopt($this->curl, CURLOPT_POSTFIELDS, "ssaction=ss&Token=" . $this->jstoken . "&mobile=" . $p . "&message=" . $msg . "&Login=Login");
            $contents = curl_exec($this->curl);
            //Check Message Status
            $pos = strpos($contents, 'Message has been submitted successfully');
            $res = ($pos !== false) ? true : false;
            $result[] = array('phone' => $p, 'msg' => $msg, 'result' => $res);
        }


        return $result;
    }
    /**
     * logout of current session.
     */
    function logout()
    {
        curl_setopt($this->curl, CURLOPT_URL, $this->way2smsHost . "LogOut");
        curl_setopt($this->curl, CURLOPT_REFERER, $this->refurl);
        $text = curl_exec($this->curl);
        curl_close($this->curl);
    }
}
/**
 * Helper Function to send to sms to single/multiple people via way2sms
 * @example sendWay2SMS ( '9000012345' , 'password' , '987654321,9876501234' , 'Hello World')
 */
function sendWay2SMS($uid, $pwd, $phone, $msg)
{
    $client = new WAY2SMSClient();
    $client->login($uid, $pwd);
    $result = $client->send($phone, $msg);
    $client->logout();
    return $result;
}


sendWay2SMS ( "9677813391" , "pseudoscripts" , "$to" , "$msg");



						}

?>




	  </div>
			<div><img src="images/spacer.gif" width="1" height="20px" alt="" /></div>
			<div><img src="images/spacer.gif" width="1" height="20px" alt="" /></div>

    </div>
</body>
</html>
