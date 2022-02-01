<?php

class Reservation {
    protected $pdo;
    protected $stmt;
    public $error;

    function __construct() {
        try {
            $this->pdo = new PDO(
    "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHAR,
    DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );

        } catch(Exception $ex) { exit($ex->getMessage()); }
}

function __destruct() {
    $this->pdo = null;
    $this->stmt = null;
 }

//save reservation

function save ($date, $name, $email) {
    try {
        $this->stmt = $this->pdo->prepare(
           "INSERT INTO `reservation` (`res_date`, `res_name`, `res_email`) VALUES (?,?,?)"
        );
        $this->stmt->execute([$date, $name, $email]);
        return true;
    } catch (Exception $ex) {
        $this->error = $ex->getMessage();
        return false;
    }
}
}

//database settings

define("DB_HOST", "localhost");
define("DB_NAME","projekat");
define("DB_CHAR", "utf8");
define("DB_USER", "root");
define("DB_PASS","");

//new reservation object
$_RSV = new Reservation();

//test
// echo $_RSV->save("2021-01-01", "Jon Doe", "jon@doe.com")
// ? "OK" : $_RSV->error;

?>