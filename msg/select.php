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
//var $array[100][100];
$array = array(array());
//settype($array,'string');
$index=0;
while($row = $run->fetch_array())
{
    //echo '<p>' . $row['fullname'] . '</p>';
    $array[$index][0]=$row['fullname']."(".$row['email'].")";
    //echo '<p>'."test".$array[$index][0]."=>".$row['fullname'].'</p>';
    $index=$index+1;
}
$i=0;
for($i=0;$i<$index;$i=$i+1)
{
    $name=$array[$i][0];
    //echo '<a href="chatbox.php" name="user_name">'.'<p>'.$array[$i][0].'</p>'.'</a>'.'<br>';
    //echo '<a href=chatbox.php?user_name=",urlencode($name),">$name</a>'.'<br>';
    //echo '<a href="chatbox.php?user_name=' . urlencode($name) . '">' . $name . '</a>'.'<br>';
    //echo '<button '."onclick=". select($name) . '>' . $name . '</button>'.'<br>';
    //echo '<div class="'.$name.'">' . $name . '</a>'.'<br>';
    echo '<a href="chat_box.html">' . $name . '</a>'.'<br>';

}
?>

