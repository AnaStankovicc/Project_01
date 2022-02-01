<?php
class Konekcija {
    private $connection;
    function __construct() {
        //povezujemo se bez baze jer hocemo da napravimo novu ako ne postoji 
        $this->connection = new mysqli('localhost','root','', 'projekat');
        if($this->connection->error) {
            die("Greska pri povezivanju: $this->connection->error");
        }
    

        //selektujemo bazu da bi smo radili sa njom
        $this->connection->select_db('projekat');

        $this->connection->query("CREATE TABLE IF NOT EXISTS `pre-orders` ( `id` INT NOT NULL AUTO_INCREMENT , `putanja` VARCHAR(50) NOT NULL , `artist` VARCHAR(50) NOT NULL , `album` VARCHAR(50) NOT NULL, `cena` INT NOT NULL, PRIMARY KEY (`id`)) ENGINE = InnoDB;");


    }

    private function prepareSelectUser() {
        return $this->connection->prepare("SELECT * FROM `korisnici` WHERE `password`=? AND `username`=?");
    }


    function proveriKorisnika($username, $password): bool {
        $prepared = $this->prepareSelectUser();
        $prepared->bind_param("ss",$password,$username);
        $prepared->execute();
        return $prepared->get_result()->num_rows == 1;
    }


    function nizNewArrivals() {
        $query_res = $this->connection->query("SELECT * FROM `new_arrivals`");
        $result = [];
        foreach ($query_res as $row) {
            array_push($result,[$row['putanja'],$row['artist'],$row['album']]);
        }
        return $result;
    }

    function nizPreOrders() {
        $query_res = $this->connection->query("SELECT * FROM `pre-orders`");
        $result = [];
        foreach ($query_res as $row) {
            array_push($result,[$row['id'],$row['putanja'],$row['artist'],$row['album'], $row['cena']]);
        }
        return $result;
    }

    function nizShop() {
        $query_res = $this->connection->query("SELECT * FROM `baza_ploce`");
        $result = [];
        foreach ($query_res as $row) {
            array_push($result,[$row['id'],$row['album'],$row['zanr'], $row['godina_izdavanja'], $row['cena'],$row['putanja']]);
        }
        return $result;
    }

    function nizComingSoon() {
        $query_res = $this->connection->query("SELECT * FROM `coming_soon`");
        $result = [];
        foreach ($query_res as $row) {
            array_push($result,[$row['naziv'],$row['album']]);
        }
        return $result;
    }

    function nizBestSelling() {
        $query_res = $this->connection->query("SELECT * FROM `best-selling`");
        $result = [];
        foreach ($query_res as $row) {
            array_push($result,[$row['naziv'],$row['text'],$row['putanja']]);
        }
        return $result;
    }

    function nizNewReleases() {
        $query_res = $this->connection->query("SELECT * FROM `new_releases`");
        $result = [];
        foreach ($query_res as $row) {
            array_push($result,[$row['naziv'],$row['album'],$row['detalji']]);
        }
        return $result;
    }


   
    //get product from the database
    function getData() {
        $sql = "SELECT*FROM `baza_ploce`";

        $result=mysqli_query($this->connection, $sql);

        if(mysqli_num_rows($result) > 0) {
            return $result;
        }
    }
}


$connection = new Konekcija();




?>