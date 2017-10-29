<?php
  //establish a connection to the database
  $servername = "localhost";//input servername
  $username = "blawrenc_Hack";//input username
  $password = "helloworld";//input password if any
  $dbname = "blawrenc_Users";//add the name of the specific database to connect to

  $conn = mysqli_connect($servername, $username, $password);//create connection

  //function to create table
  function addUserTable($name) {
    $cr_tbl_sql = "INSERT INTO users(id INT AUTO_INCREMENT PRIMARY KEY, email TEXT NOT NULL, passwd TEXT NOT NULL)";
    return mysqli_query($conn, $cr_tbl_sql);
  }

  //function to add to database
  function addUser($email, $pass) {
    $ins_us_sql = "INSERT INTO users(email, passwd) VALUES($email, $pass)";
    return mysqli_query($conn, $ins_us_sql);
  }

  function addJob($job, $tbl_name) {
    $ins_jb_sql = "INSERT INTO $tbl_name jobs(name) VALUES($job)";
    return mysqli_query($conn, $ins_jb_sql);
  }

  //function to check if user exists
  function callUser($email, $pass) {
    $sel_sql = "SELECT email, pass FROM users WHERE email = $email AND pass = $pass";
    return mysqli_query($conn, $sel_sql);

  }

  //if the user clicks sign up
  function signUp() {
    if(isset($_POST("signup"))) {
      if(isset($_POST["email_sign"])) {
          $email = mysqli_real_escape_string($conn, strip_tags($_POST["email_log"]));
      }
      if(isset($_POST["pass_sign"])) {
        $pass = mysqli_real_escape_string($conn, strip_tags($_POST["pass_log"]));
      }
      $ins_sql = "INSERT INTO users(email, passwd) VALUES('$email', '$pass')"
      if(mysqli_query($conn, $ins_sql)) {
        createUserTable();
        ?>
        <script>
          window.location = "" //put in the login file name
        </script>
        <?php
      };
    }
  }

  //if the user clicks login
  function login() {
    if(isset($_POST["login"])) {
      if(isset($_POST["email_log"]) && isset($_POST["pass_log"])) {
        bringUser($_POST["email_log"], $_POST["pass_log"]);
      }
    }
  }

//this is for loging out of the page
//test if it works with the logout button
  function logOut() {
    if(isset($_POST["logout"])) {
      session_start();
      unset($_SESSION['user']); // remove individual session var
      session_destroy();
      header('location: login.php'); // redirct to certain page now
    }
  }

?>

?>
