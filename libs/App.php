<?php require "../config/config.php"; ?>
<?php 

  class App{
    public $host = HOST;
    public $dbname = DBNAME;
    public $user = USER;
    public $password = PASS;

    public $link;

    public function __construct()
    {
      $this->connect();
      
    }

    public function connect(){
      $this->link = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname . "", $this->user, $this->password);

      if($this->link){
        echo "db connection OK";
      }
    }
  }


  $app = new App;
