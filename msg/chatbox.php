<?php

$name=$_GET['user_name'];
//echo $name;
//session_start();
//echo $_SESSION['admin_email'];
//$ad_email= $_SESSION['admin_email'];

$host = "localhost";
$user = "psyhelp";
$pass = "psyhelp";
$db_name = "psyhelp";
$con = new mysqli($host, $user, $pass, $db_name);

$query = "SELECT * FROM admin_list";
$run = $con->query($query);

while($row = $run->fetch_array())
{
    $ad_email=$row['email'];
    $ad_name=$row['fullname'];
    //echo '<p>' . $row['message'] . '</p>';
    //$array[$index][0]=$row['message']."   ".$row['time'];
    //echo '<p>'."test".$array[$index][0]."=>".$row['fullname'].'</p>';
    //$index=$index+1;
}


$common_name = $name.$ad_email;
//echo  $common_name;
//$common_name=asort($common_name);

session_start();
$_SESSION['common_dir']=$common_name;
$_SESSION['fullname']=$ad_name;
//echo $_SESSION['common_dir'].'<br>';
//echo $_SESSION['fullname'].'<br>';
//echo "<meta http-equiv='refresh' content='1;chat_box.php' />";

/*
echo '<!DOCTYPE html>
<html>
<head>
    <title>Conversation</title>

</head>

<body>
<div class="messages">
    <div id="chatContainer">

        <div id="" class="rounded">'.$name.'</div>
        <div id="all_message"></div>
    </div>
    
    <form action="message_fetch.php" method="post">

        <input type="text">
        <input type="submit" value="send">

    </form>
</div>
<script type="text/javascript">
    function dis_msg() {
        xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","message_fetch.php",false);
        xmlhttp.send(null);
        document.getElementById("all_message").innerHTML=xmlhttp.responseText;
    }
    dis_msg();
    //select("Chat User");
    setInterval(function () {
        dis_msg();

    },2000);


</script>
</body>
</html>
';*/
//echo  $name;
//echo "Chat with ".$name.'<br>';
//echo '<form><input type="text">
//<input type="submit">
//</form>';

/**
 * Created by PhpStorm.
 * User: apu
 * Date: 4/18/17
 * Time: 2:36 AM
 */
/*
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "chat";
$con = new mysqli($host, $user, $pass, $db_name);

$query = "SELECT * FROM user_info_new ORDER BY id ASC";
$run = $con->query($query);
//var $array[100][100];
$array = array(array());
//settype($array,'string');
$index=0;
while($row = $run->fetch_array())
{
    //echo '<p>' . $row['fullname'] . '</p>';
    $array[$index][0]=$row['fullname'].$row['id'];
    //echo '<p>'."test".$array[$index][0]."=>".$row['fullname'].'</p>';
    $index=$index+1;
}
$i=0;
for($i=0;$i<$index;$i=$i+1)
{
    $name=$array[$i][0];
    echo '<a href="chatbox.php" onclick="select($name)">'.'<p>'.$array[$i][0].'</p>'.'</a>'.'<br>';

}*/
?>
