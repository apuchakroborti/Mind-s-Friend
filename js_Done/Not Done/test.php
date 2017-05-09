<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo "email is " . $_SESSION["email"] . ".<br>";
?>

</body>
</html>