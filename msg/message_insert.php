<!--?php
$subject=$_GET["a"];
print_r($subject);
//die;
$con=mysqli_connect("localhost","root","","psyhelp");
if(!$con){
    echo("No database connection.");
}
$query="insert into subjects(sid) values('$subject')";
$result=mysqli_query($con,$query);
if($result){
    echo("Subject successfully inserted");
}
else {
    echo("Subject could not be inserted. Might be, the subject already exists.");
}
?-->

<?php
//$name=$_GET['user_name'];
//$name=$_GET['user_name'];
//echo "<meta http-equiv='refresh' content='1;chatbox.php' />";

$text=$_GET['message'];
$username=$_GET['user_name'];
$text=$username.":".$text;

//$fullname="ApuSwasti";
//$fullname=$_SESSION['common_dir'];
//$ad_name=$_SESSION['fullname'];
//
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


$servername = "localhost";
$username = "psyhelp";
$password = "psyhelp";
$dbname = "psyhelp";

$time = date('Y-m-d H:i:s');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$text = mysqli_escape_string($conn, $text);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "INSERT INTO all_messages (ad_us_email,message,time) VALUES ('$fullname','$text' ,'$time')";

    if ($conn->query($sql) === TRUE)
    {
        echo "messages inserted";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();
?>
