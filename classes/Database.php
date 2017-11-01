<?php
class Database {
  private $host = 'localhost';
  private $user = 'root';
  private $pass = '';
  private $dbname = '';

  private $dbh; //database handler
  private $error; //error
  private $stmt; //property to execute statments

  public function __construct() {
    //Set DSN
    $dsn = 'mysql:host='. $this->host . ';dbname='.$this->dbname;
    //Set options
    $options = array(
      PDO::ATTR_PERSISTENT   => true,
      PDO::ATTR_ERRMODE      => PDO::ERRMODE_EXCEPTION
    );
    //create new PDO
    try {
      $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
    } catch(PDOException $e) {
      $this->error = $e->getMessage();
    }
  }

  public function query($query) {
    $this->stmt = $this->dbh->prepare($query);
  }

  public function bind($param, $value, $type = null) {
    if(is_null($type)) {
      switch(true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value);
          $type = PDO::PARAM_NULL;
          break;
        default:
          $type = $PDO::PARAM_STR;
      }
      $this->stmt->bindValue($param, $value, $type);
    }
  }

  public function execute() {
    return $this->stmt->execute();
  }

  public function lastInsertId() {
    $this->dbh->lastInsertId();
  }

  public function resultset() {
    $this->execute();
    //fetch it as an associative ArrayAccess
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function __destruct() {
    //close the data connection when the person logout
    $dsn = '';
  }
}
?>
