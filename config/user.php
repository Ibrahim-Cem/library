<?php
    class users{
        public $userID;
        public $userName;
        public $name;
        public $surname;
        private $passW;
        public $RGTime;

        public function __construct(){
            session_start();
            if(!isset($_SESSION['userName'])){
                session_destroy();
            }
        }
        public function login($userName, $passW){
            $this->userName =$userName;
            $this->passW =$passW;
            
            require_once "db.php";

            $query = $db->prepare("SELECT * FROM users WHERE
            userName = ? and passW = ?
            ");
             $query->execute(array($this->userName, $this->passW));
        
            if ($query->rowCount()){
                session_start();
                foreach($query as $row){
                    $_SESSION['userID'] = $row['userID'];
                    $_SESSION['userName'] = $row['userName'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['RGTime'] = $row['registerTime'];

                }
            } 
        }
    }
?>