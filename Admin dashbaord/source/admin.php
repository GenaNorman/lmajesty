<?php
// Establiching connection to your data base
    $servername = 'localhost';
    $username = "T-chala";
    $password = "admin123";
    $dbname='l_majesty';

    // $conn us used to store the valued used to establish your connections with a database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection between the database and your php file
    if ($conn) {
        echo "Connected successfully";
        }

            $select = "SELECT * FROM students ";
            $results = mysqli_query($conn, $select);
            $Rs = mysqli_fetch_all($results);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link  href="admin.css?v=<?php echo time(); ?>"rel="stylesheet" type="text/css" />
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
            <a class="action1" href="../Add student/student.html">add staff account</a>
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
            Voters And Nominee's<i class="fa fa-arrow-down" aria-hidden="true"></i>
          </h1>
          <div class="actions">
            <p class="action1"><a href="">Voter's Info</a></p>
            <p class="action1"><a href="">Nominee's Info</a></p>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="controls">
          <h2>Admin</h2>
          <div class="ctls">
            <span class="icon1"
              ><img src="./enow neris.jpg" alt="neris" class="neris"
            /></span>
            <span class="icon1-name">Admin</span>
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
                <p class="blg">
                  <?php
                  echo count($Rs);
                  ?>
                </p>
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
                <p class="blog">Nominee</p>
                <br />
                <p class="blg">10</p>
              </div>
            </div>
          </div>
          <div class="all-stud">
          <h3>
            Staffs Accounts
          </h3>
            <table>
              <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
              <th>Specialty</th>
              <th>level</th>
            </tr>
            <?php

            foreach ($Rs as $r) {
              # code...
              echo"
              <tr>
              <td>$r[0]</td>
              <td>$r[1]</td>
              <td>$r[2]</td>
              <td>$r[3]</td>
              <td>$r[4]</td>
            </tr>
              ";
            }
            ?>
          </table>
          <h3>
            Students Accounts
          </h3>
          <table>
              <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
              <th>Specialty</th>
              <th>level</th>
            </tr>
            <?php

            foreach ($Rs as $r) {
              # code...
              echo"
              <tr>
              <td>$r[0]</td>
              <td>$r[1]</td>
              <td>$r[2]</td>
              <td>$r[3]</td>
              <td>$r[4]</td>
            </tr>
              ";
            }
            ?>
          </table>
        </div>
          <div class="others"></div>
        </div>
      </div>
    </div>
  </body>
</html>
