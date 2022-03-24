<?php
class BaseDao{
  private $conn;
  public function __construct(){
    $servername = "127.0.0.1";
    $username = "root";
    $password = "root";
    $schema = "blooddonation";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$schema", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  }
  }

     public function get_all(){
       $stmt = $this->conn->prepare("select * from username");
       $stmt->execute();
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
     }

     public function get_by_id($id){
       $stmt = $this->conn->prepare("SELECT * FROM username WHERE id = :id");
       $stmt->execute(['id' => $id]);
       $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
       return reset($result);
     }
     public function add($blooddonation){
       $stmt = $this->conn->prepare("INSERT INTO todos (description, created) VALUES (:description, :created)");
       $stmt->execute($blooddonation);
       $blooddonation['id'] = $this->conn->lastInsertId();
       return $todo;
     }

     public function delete($id){
       $stmt = $this->conn->prepare("DELETE FROM username WHERE id=:id");
       $stmt->bindParam(':id', $id); // SQL injection prevention
       $stmt->execute();
     }
     public function update($blooddonation){
       $stmt = $this->conn->prepare("UPDATE todos SET description=:description, created=:created WHERE id=:id");
       $stmt->execute($blooddonation);
       return $blooddonation;
     }
     catch(PDOException $e) {
       echo "Connection failed: " . $e->getMessage();
     }

}
?>
