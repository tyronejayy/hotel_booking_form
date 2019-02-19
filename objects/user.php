
<?php
// 'user' object
class User{
    // database connection and table name
      private $conn;
      private $table_name = "users";
  
       // object properties
      public $id;
      public $firstname;
      public $lastname;
      public $email;
  
        // constructor
      public function __construct($db){
          $this->conn = $db;
  
      }

      

public function check_user_exists($username)
{
    try{
        $stmt = $this->db->prepare("SELECT user_name FROM users WHERE user_name=:username");
        $stmt->execute(array(':username'=>$username));
        return $stmt->fetchColumn() > 0;  // fetchColumn return the number of rows selected
    }

    catch(PDOExeception $e)
    {
        echo $e->getMessage();
    }
}



          // create new user record
       public function create(){
           $query = "INSERT INTO
                          " . $this->table_name . "
                      SET
                          firstname = :firstname,
                          lastname = :lastname,
                          email = :email";
  
                             // prepare the query
              $stmt = $this->conn->prepare($query);
  
               // sanitize
              $this->firstname=htmlspecialchars(strip_tags($this->firstname));
              $this->lastname=htmlspecialchars(strip_tags($this->lastname));
              $this->email=htmlspecialchars(strip_tags($this->email));
  
              // bind the values
              $stmt->bindParam(':firstname', $this->firstname);
              $stmt->bindParam(':lastname', $this->lastname);
              $stmt->bindParam(':email', $this->email);
  
              // execute the query, also check if query was successful
              if($stmt->execute()){
                  return true;
              }else{
                  $this->showError($stmt);
                  return false;
              }
          }
  
  }
  ?>