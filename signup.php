


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mind's Friend</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/responsive-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="navbar-brand">
                            <img src="img/univ.png" class="img-responsive" width="45" height="45" align="left">
                            <a href="index.html"><h1>  Mind's Friend</h1></a>

                        </div>
                    </div>
                    <div class="menu">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" ><a href="index.html">Home</a></li>
                            <li role="presentation"><a href="service.html">Service</a></li>

                            <li role="presentation"><a href="about_us.html">About us</a></li>
                            <li role="presentation"><a href="contact.html">Contact</a></li>
                            <li role="presentation" class="active"><a href="login.html">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>


<div class="container">
    <?php

    $email = $_POST["email"];
    $pass = $_POST["password"];
    $fullname = $_POST["fullname"];
    $pass = md5($pass);

    $servername = "localhost";
    $username = "psyhelp";
    $password = "psyhelp";
    $dbname = "psyhelp";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT email FROM user_list WHERE email='$email' ";
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        echo "<h2>Email is already used</h2>";
    }
    else
    {
        $sql = "INSERT INTO user_list (fullname ,email, password)
    VALUES ('$fullname', '$email' , '$pass')";

        if ($conn->query($sql) === TRUE)
        {
            echo "<h2>Your account has been created successfully<br>We are now redirecting you</h2>";

            echo "<meta http-equiv='refresh' content='3;login.html' />";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();



    ?>

</div>

<hr>
<!--start footer-->
<footer>



    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="social-network">
                        <li><a href="http://goo.gl/NjPIkI" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-12">

                    <div class="copyright">

                        <div class="credits">
                            <h3>Developed By</h3>
                            <h4>

                                Swasti Sunder Das<br>
                                Apu Kumar Chakroborty<br>

                                Department of Computer Science & Engineering<br>
                                University of Dhaka<br>
                            </h4>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!--end footer-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/responsive-slider.js"></script>
<script src="js/wow.min.js"></script>
<script type="text/javascript" src="js/fliplightbox.min.js"></script>
<script type="text/javascript">$('body').flipLightBox()</script>
<script>wow = new WOW({}).init();</script>

</body>
</html>

