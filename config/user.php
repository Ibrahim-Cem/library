<?php
    class user{
        public $userID;
        public $userName;
        public $name;
        public $surname;
        private $passW;
        public $RGTime;

        public function __construct(){
            session_start();
            /*if(!isset($_SESSION['userName'])){
                session_destroy();
            }*/
        }
    
        public function login($userName, $passW){
            require("db.php");
            $query =  $db->prepare("SELECT * FROM Users WHERE userName = ? and passW = ?");
            $query->execute(array($userName, $passW));

            $users = $query-> fetchAll(PDO::FETCH_OBJ);
            $passW = null;

            if($query->rowCount() == 1){
                //session_start();
                foreach ($users as $u){
                    $this->userID = $u->userID;
                    $this->userName = $u->userName;
                    $this->name = $u->name;
                    $this->surName = $u->surName;
                    $this->RGTime = $u->registerTime;
                }
                $_SESSION['userID'] = $this->userID;
                $_SESSION['userName'] = $this->userName;
                $_SESSION['name'] = $this->name;
                $_SESSION['RGTime'] = $this->RGTime;

               // header("Refresh:0 ; url=index.php");

               echo "1";
            }
            else{
                //$message = "User not found or wrong password!";
                 echo "0";
                 $this->logout();
            }
        }

        public function logout(){
            session_unset();
            session_destroy();
            header("Refresh:0 ; url=index.html");
        }
        public function isSession(){
            if(!isset($_SESSION['userName']) && !isset($_SESSION['userID'])){
                $this->logout();
            }
        }
    } 
?>