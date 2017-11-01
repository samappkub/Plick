<?php
class User {
  public $id;
  public $username;
  public $email;
  public $password;
  protected $firstName;
  protected $lastName;

  //this is how to create a Constructor
  public function __construct($username, $password) {
    $this->username = $username;
    $this->password = $passwd;
    //echo 'Constructor Called';
  }

  public function register() {
    echo $this->firstName.' '.$this->lastName.' have been registored'.
          '<br>';
  }

  public function login($username, $passwd) {
    $this->auth_user();
    //echo $username. ' is now logged in';
  }

  public function auth_user() {
    echo $this->username. ' is authenticated';
  }

  public function getFirstName() {
    return $this->firstName;
  }

  public function getLastName() {
    return $this->lastName;
  }

  public function setFirstName($first) {
    $this->firstName = $first;
  }

  public function setLastName($last) {
    $this->lastName = $last;
  }

  public function __destruct() {
    //echo 'Destructor Called';
  }
}

class Post {
  private $name;

  public function __set($name, $value) {
    echo 'Setting '.$name.' to <b>'.$value.'</b>';
    $this->name = $value;
  }

  public function __get($name) {
    echo 'Getting '.$name.'<b>'.$this->name.'</b>';
  }

  public function __isset($name) {
    echo 'Is '.$name.' set<br>';
    return isset($name);
  }
}

class First {
  public $id = 23;
  public $name = 'Kofi Appiah-Kubi';

  public function saySomething() {
    echo 'Something';
  }
}

class Second extends First {
}

$second = new Second;
$second->saySomething();
//
// $post = new Post;
// $post->name = 'Ama';
// $post->name;
// var_dump(isset($post->name));
//echo 'It worked';
// $user = new User('samapp', 'helloworld');
// $user->setFirstName('Kofi');
// $user->setLastName('Appiah');
// $user->register();
// $user->login('samappkub', 'helloworld');
?>
