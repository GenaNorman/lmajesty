<?php
// Establiching connection to your data base
    $servername = 'localhost';
    $username = "T-chala";
    $password = "admin123";
    $dbname='l_majesty';

    // $conn us used to store the valued used to establish your connections with a database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection between the database and your php file
    if (!($conn)) {
        echo "unsuccesfull successfully";
        }
    
    if (isset($_POST['submit'])){
        # code...
        $fname = $_POST['fname'];
        $fname = filter_var($fname, FILTER_SANITIZE_STRING);
        $lname = $_POST['lname'];
        $lname = filter_var($lname, FILTER_SANITIZE_STRING);
        $mails = $_POST['mails'];
        $mails = filter_var($mails, FILTER_SANITIZE_STRING);
        $specialty = $_POST['specialty'];
        $specialty = filter_var($specialty, FILTER_SANITIZE_STRING);
        $lvl = $_POST['lvl'];
        $lvl = filter_var($lvl, FILTER_SANITIZE_STRING);
        $passwd = $_POST['passwd'];
        $passwd = filter_var($passwd, FILTER_SANITIZE_STRING);
        $cpasswd = $_POST['cpasswd'];
        $cpasswd = filter_var($cpasswd, FILTER_SANITIZE_STRING);


        
            if (!($passwd == $cpasswd)){
                echo 'incorrect';
            }
            else {
                $sql = "INSERT INTO students VALUES('$fname', '$lname', '$mails', '$specialty', '$lvl', '$passwd', '$cpasswd')";
                $regist = mysqli_query($conn, $sql);     
            }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./register.css"> -->
    <link  href="register.css?v=<?php echo time(); ?>"rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="major">
        <div class="minor1">
                <h1>Welcome to L-MAJESTRY</h1>
               <h3 class="three"> sign up using social networks</h3>
            <div>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
                <h5 class="line">OR</h5>
            <form action="" method="POST" class="dtls">
                <input class="one" type="text" placeholder="First Name" name="fname">
                <input class="one" type="text" placeholder="Last Name" name="lname">
                <input class="one" type="email" placeholder="Email" name="mails">
                <input class="one" type="txt" placeholder="specialty" name="specialty">
                <input class="one" type="text" placeholder="leve" name="lvl">
                <input class="one" type="password" placeholder="Password" name="passwd">
                <input class="one" type="password" placeholder="Verify Password" name="cpasswd"> <br>
                <input class="one8" type="submit" name="submit">
            </form>

        </div>
        <div class="minor2">
             <div>
                <h2 class="two">You are welcome.</h2>
                <p class="two2">login and unlock that your <br> hidden potential with L-MAJESTRY</p>
             </div>
             <div>
                <button class="one1" type="button"><a href="login1.html">Sign In</a></button>
             </div>
        </div>
    </div>
</body>
</html>