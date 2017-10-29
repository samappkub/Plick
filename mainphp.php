<?php
  //establish a connection to the database
  $servername = "localhost";//input servername
  $username = "blawrenc_Hack";//input username
  $password = "helloworld";//input password if any
  $dbname = "blawrenc_Users";//add the name of the specific database to connect to

  $conn = mysqli_connect($servername, $username, $password, $dbname);//create connection

  if(!$conn) {
    echo "no connection";
  } else {
    echo "connection established";
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
