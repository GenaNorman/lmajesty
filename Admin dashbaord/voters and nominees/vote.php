<?php
  //establishing connection between database and php file
  $conn = mysqli_connect('localhost','T-chala','admin123','login');

  //verify sucess of connectoin
  if($conn) {
    # code...
    echo'CONNNECTED SUCCESSFULY';
  }
  else {
    echo'connection error:' . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../source/admin.css" />
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.css" />
    <title>Dashboard</title>
  </head>
  <body>
    <div class="General">
      <div class="navigation">
        <div class="users">
          <span class="logo">L-MAJESTY</span>
        </div>
        <i class="fa fa-home" aria-hidden="false"></i>
        <h1><i class="fa fa-home" aria-hidden="true"></i>Dashboard</h1>
        <div class="dropdown">
          <h1 class="perform">
            Manage Staff<i class="fa fa-arrow-down" aria-hidden="true"></i>
          </h1>
          <div class="actions">
            <p class="action1">add staff account</p>
            <p class="action1">delete staff account</p>
          </div>
        </div>
        <div class="dropdown">
          <h1 class="perform">
            Manage Students<i class="fa fa-arrow-down" aria-hidden="true"></i>
          </h1>
          <div class="actions">
            <p class="action1">add staff account</p>
            <p class="action1">delete staff account</p>
          </div>
        </div>
        <div class="dropdown">
          <h1 class="perform">
            Manage Votes<i class="fa fa-arrow-down" aria-hidden="true"></i>
          </h1>
          <div class="actions">
            <p class="action1"><a href="">Voters Details</a></p>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="controls">
          <h2>Dashboard</h2>
          <div class="ctls">
            <span class="icon1"
              ><img src="./enow neris.jpg" alt="neris" class="neris"
            /></span>
            <span class="icon1-name">saint john</span>
            <span class="access">
              <a href="#" class="auth">login</a
              ><a href="#" class="auth">/logout</a>
            </span>
          </div>
        </div>
        <div class="activities">
          <div class="all-stud">
            <div class="act1">
              <div class="demost"></div>
              <div class="log">
                <p class="blog">Students</p>
                <br />
                <p class="blg">+700</p>
              </div>
            </div>
            <div class="act1">
              <div class="demost demost1"></div>
              <div class="log">
                <p class="blog">Staffs</p>
                <br />
                <p class="blg">+50</p>
              </div>
            </div>
            <div class="act1">
              <div class="demost demost2"></div>
              <div class="log">
                <p class="blog">Events</p>
                <br />
                <p class="blg">20</p>
              </div>
            </div>
          </div>
          <div class="all-staff"></div>
          <div class="others"></div>
        </div>
      </div>
    </div>
  </body>
</html>
