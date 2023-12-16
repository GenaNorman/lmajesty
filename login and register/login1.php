<?php
// Establiching connection to your data base
    $servername = 'localhost';
    $username = "T-chala";
    $password = "admin123";
    $dbname='l_majesty';

    // $conn us used to store the valued used to establish your connections with a database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection between the database and your php file
    if ($conn){
          echo "Connected successfully";
        }


    if (isset($_POST['submit'])) {

        // $mail = $_POST['mail'];
        // $mail = filter_var($mail, FILTER_SANITIZE_STRING);
        // $passwd = $_POST['passwd'];
        // $passwd = filter_var($passwd, FILTER_SANITIZE_STRING);

      $sql = "SELECT email,  password * FROM students";
      $result = mysqli_query($conn, $sql);

      $login = mysqli_fetch_assoc($result);

      echo $login;
        // if ($login[] == 'email') {
        //   # code...
        //   echo'correct';
        // }
        // else {
          
        //   echo'wrong';
        // }

        }
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./login1.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div class="major">
      <div class="minor1">
        <div>
          <h1>Login to Your Account</h1>
          <h3 class="three">login using social networks</h3>
        </div>
        <div>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-google"></a>
          <a href="#" class="fa fa-linkedin"></a>
        </div>
        <div>
          <h5 class="line">OR</h5>
        </div>
        <div>
          <form action="<?php echo $_SERVER['PHP_SELF']?>" method='POST'>
            <input class="one" type="email" placeholder="Email" name= 'mail'/>
          </div>
          <div>
            <input class="one" type="password" placeholder="password" name='passwd'/>
          </div>
          <div>
            <input class="one" type="submit" name='submit'/>
          </div>
        </form>
        </div>
      </div>
      <div class="minor2">
        <div>
          <h2 class="two">New here?</h2>
          <p class="two2">
            sign up and unlock that your <br />
            hidden potential with L-MAJESTRY
          </p>
        </div>
    </div>
  </body>
</html>
