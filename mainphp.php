<?php
  //establish a connection to the database
  try {
  	$myPDO = new PDO('sqlite:Users.db');
  	if($myPDO) {
  		echo "connected established";
  	}
  } catch(PDOException $e) {
  	echo "connection not established";
  }

  //a few commands on that will be used
  $cr_sql = "CREATE TABLE Jobs(id INTEGER PRIMARY KEY, company TEXT NOT NULL)";
    $ins_sql = "INSERT INTO Jobs VALUES(1, 'Tesla')";
    $ins1_sql = "INSERT INTO Jobs VALUES(2, 'Ben')";
    $ins2_sql = "INSERT INTO Jobs VALUES(3, 'Sam')";
    $myPDO->query($cr_sql);
    $myPDO->query($ins_sql);
    $myPDO->query($ins1_sql);
    $myPDO->query($ins2_sql);
    $sel_sql = "SELECT * FROM Jobs";
    $stmt = $myPDO->query($sel_sql);

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    	echo $row['id'];
  	echo $row['company'];
    }



  //function to create table
  function addUserTable($name) {
    $cr_tbl_sql = "INSERT INTO users(id INT AUTO_INCREMENT PRIMARY KEY, email TEXT NOT NULL, passwd TEXT NOT NULL)";
    return mysqli_query($conn, $cr_tbl_sql);
  }

  //function to add to database
  function addUser($email, $pass) {
    $ins_us_sql = "INSERT INTO Students(email, passwd) VALUES('$email', '$pass')";
    return mysqli_query($conn, $ins_us_sql);
  }

  function addJob($job, $tbl_name) {
    $ins_jb_sql = "INSERT INTO $tbl_name(name) VALUES($job)";
    return mysqli_query($conn, $ins_jb_sql);
  }

  //function to check if user exists
  function callUser($email, $pass) {
    $sel_sql = "SELECT * FROM Students WHERE email = '$email' AND passwd = '$pass'";
    return mysqli_query($conn, $sel_sql);
  }

  //if the user clicks sign up
  function signUp() {
    if(isset($_POST('signup'))) {
      if(isset($_POST['email_sign'])) {
          $email = mysqli_real_escape_string($conn, strip_tags($_POST['email_log']));
      }
      if(isset($_POST['pass_sign'])) {
        $pass = mysqli_real_escape_string($conn, strip_tags($_POST['pass_log']));
      }
      $ins_sql = "INSERT INTO Students(email, passwd) VALUES('$email', '$pass')"
      if(mysqli_query($conn, $ins_sql)) {
        createUserTable($email);
        ?>
        <script>
          window.location = "HomePage.html"; //put in the login file name
        </script>
        <?php
      };
    }
  }

  //if the user clicks login
  function login() {
    if(isset($_POST["login"])) {
      if(isset($_POST["email_log"]) && isset($_POST["pass_log"])) {
        if(bringUser($_POST["email_log"], $_POST["pass_log"])) {
            ?>
            <script>
              window.location = "HomePage.html";
            </script>
            <?php
        }
      }
    }
  }

//this is for loging out of the page
//test if it works with the logout button
  function logOut() {
    if(isset($_GET["logout"])) {
      session_start();
      unset($_SESSION['user']); // remove individual session var
      session_destroy();
      header('location: index.html'); // redirct to certain page now
    }
  }

?>
