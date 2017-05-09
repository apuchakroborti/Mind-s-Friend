<?php
/**
 * Created by PhpStorm.
 * User: apu
 * Date: 4/18/17
 * Time: 2:36 AM
 */

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
    break;
    //$ad_name=$row['fullname'];
    //echo '<p>' . $row['message'] . '</p>';
    //$array[$index][0]=$row['message']."   ".$row['time'];
    //echo '<p>'."test".$array[$index][0]."=>".$row['fullname'].'</p>';
    //$index=$index+1;
}
$run->close();

//$host = "localhost";
//$user = "root";
//$pass = "";
//$db_name = "psyhelp";
$con = new mysqli($host, $user, $pass, $db_name);

$query = "SELECT * FROM user_list";
$run = $con->query($query);

while($row = $run->fetch_array())
{
    $us_email=$row['email'];
    break;
    //$ad_name=$row['fullname'];
    //echo '<p>' . $row['message'] . '</p>';
    //$array[$index][0]=$row['message']."   ".$row['time'];
    //echo '<p>'."test".$array[$index][0]."=>".$row['fullname'].'</p>';
    //$index=$index+1;
}
$run->close();

//

$fullname=$ad_email.$us_email;




$host = "localhost";
$user = "root";
$pass = "";
$db_name = "psyhelp";
$con = new mysqli($host, $user, $pass, $db_name);

$query = "SELECT * FROM all_messages";
$run = $con->query($query);

//var $array[100][100];

$array = array(array('string'));

//settype($array,'string');

$index=0;
while($row = $run->fetch_array())
{
    //echo '<p>' . $row['message'] . '</p>';
    if($row['ad_us_email']==$fullname)
    {
        $array[$index][0]=$row['message']."   ".$row['time'];
        //echo '<p>'."test".$array[$index][0]."=>".$row['fullname'].'</p>';
        $index=$index+1;
    }

}
for ($i=$index-1;$i>=0;$i--)
{
    echo '<p>'.$array[$i][0].'</p>';
}

?>



<!--?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "psyhelp";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FORM 'all_messages' ORDER BY time DESC";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "Apu: " . $row['message']. '<br>';
    }

    /*if ($result-> num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Apu: " . $row['message']. '<br>';
        }
    }
    else {
        echo "0 results";
    }*/
    $conn->close();
?-->


<!--?php
$connect =new mysqli("loaclhost","root","","psyhelp");

$sql ="SELECT * FROM 'all_messages' ORDER BY time DESC ";

$res = $connect->query($sql);
if($res->num_rows($res)>0) {
    while ($row = $res->fetch_assoc($res)) {
        echo '<p>' . $row['message'] . '</p>';
    }
}
else
    echo '';
?-->