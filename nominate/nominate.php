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

//  $email = mysql_real_escape_string($conn, $_POST['email']);
//  $email = mysql_real_escape_string($conn, $_POST['email']);
//  $email = mysql_real_escape_string($conn, $_POST['email']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nominate</title>
    <link rel="stylesheet" href="../nominate/nominate.css" />
  </head>
  <body>
    <main>
      <div class="heading">
        <h1 class="heading1">OUR CONESTANCE</h1>
        <!-- <h2>NOMINEES</h2> -->
      </div>
      <div class="content">
        <div class="full-list">
          <div class="nominee-one">
            <img
              src="../nominate/pictures/norman.jpg"
              alt="nominise pictuture"
            />
          </div>
          <div class="details">
            <h3>Gena Norman Kamando</h3>
            <p>
              A level 2 <br />software engineering<br />
              <button class="voting-btn">00 votes</button>
            </p>
          </div>
        </div>
        <div class="full-list">
          <div class="nominee-one">
            <img
              src="../nominate/pictures/goddy.jpg"
              alt="nominise pictuture"
            />
          </div>
          <div class="details">
            <h3>
              Mbemgong Godwill <br />
              Ndi
            </h3>
            <p>
              A level 2 <br />software engineering<br />
              <button class="voting-btn">00 votes</button>
            </p>
          </div>
        </div>
        <div class="full-list">
          <div class="nominee-one">
            <img
              src="../nominate/pictures/enow neris.jpg"
              alt="nominise pictuture"
            />
          </div>
          <div class="details">
            <h3>Enow Neris</h3>
            <p>
              A level 2 <br />Cyber Security<br />
              <button class="voting-btn">00 votes</button>
            </p>
          </div>
        </div>
        <div class="full-list">
          <div class="nominee-one">
            <img
              src="../nominate/pictures/valantine.jpg"
              alt="nominise pictuture"
            />
          </div>
          <div class="details">
            <h3>Ndifon Valantine</h3>
            <p>
              A level 2 <br />software engineering<br />
              <button class="voting-btn">00 votes</button>
            </p>
          </div>
        </div>
        <div class="full-list">
          <div class="nominee-one">
            <img
              src="../nominate/pictures/ransom.jpg"
              alt="nominise pictuture"
            />
          </div>
          <div class="details">
            <h3>Yunyi Ransom</h3>
            <p>
              A level 2 <br />software engineering<br />
              <button class="voting-btn">00 votes</button>
            </p>
          </div>
        </div>
        <div class="full-list">
          <div class="nominee-one">
            <img
              src="../nominate/pictures/paola.jpg"
              alt="nominise pictuture"
            />
          </div>
          <div class="details">
            <h3>Kolle Paola</h3>
            <p>
              A level 3 <br />software engineering<br />
              <button class="voting-btn">00 votes</button>
            </p>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
