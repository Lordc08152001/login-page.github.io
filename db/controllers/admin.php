<?php 
    include_once "../db/db.php";


    class TodaController{

        private $db = null; 
        public function __construct(){
            $this->db = new DBController();
        }

        public function get_user($username){
            $sql="SELECT 
                    * 
                  FROM 
                    `tbltry`
                  WHERE name = :name;
                    "; 
            $connection = $this->db->getConnection();

            $stmt = $connection->prepare($sql);

            $stmt->bindParam(':name', $username);
        
            $stmt -> execute(); 

            $data = array();
            if ($stmt->rowCount() > 0){
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    array_push($data, $row);
                }
            }

            return $data;
        }

        /* GET All USER */
        public function get_all_users(){
            $sql="SELECT 
                    * 
                  FROM 
                    `tbltry`;
                    "; 
            $connection = $this->db->getConnection();

            $stmt = $connection->prepare($sql);
        
            $stmt -> execute(); 

            $data = array();

            if ($stmt->rowCount() > 0){
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    array_push($data, $row);
                }
            }

            return $data;
        }
        
        public function update_user($id){
            
        }

        public function create_new_user(){

        }

        public function remove_users($id){

        }
    }
?>