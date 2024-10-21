<?php

class Commande
{

    public $id,$Date_creation,$totale;
    private $conn, $serv = 'localhost', $user = 'root', $pass = '', $bdname = 'resto';

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->serv;dbname=$this->bdname", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }




    public function CR_C()

 
    {

        $req = "INSERT INTO orders (id,Date_creation,totale) VALUES ('','$this->Date_creation','$this->totale')";
        $res = $this->conn->exec("$req");
        if ($res) return true;
        else return false;
    }
 

    public function RC(): array
   {
       $stmt = $this->conn->prepare("SELECT * FROM orders");
       $stmt->execute();
   
       $cmd = [];
   
       while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
           
           
   
           $cmd[] = $row;
       }
   
       return $cmd;
   }
    



}
?>
