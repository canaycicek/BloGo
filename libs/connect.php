<?php
    require_once realpath(__DIR__ . "/../vendor/autoload.php");

    use Dotenv\Dotenv;

    $dotenv = Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();
    
    class Db{
        private $host = null;
        private $user = null;
        private $password = null;
        private $dbName = null;

        public function __construct(){
            $this->host = $_ENV["HOSTNAME"];
            $this->user = $_ENV["USERNAME"];
            $this->password = $_ENV["PASSWORD"];
            $this->dbName = $_ENV["DBNAME"];
        }
        

        protected function connect(){
            try{
                $dsn = "mysql:host=".$this->host.";dbname=".$this->dbName;
                $pdo = new PDO($dsn, $this->user, $this->password);

                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

                return $pdo;
            }
            catch(PDOException $e){
                echo "bağlantı hatası: ".$e->getMessage();
            }
        }
    }

?>