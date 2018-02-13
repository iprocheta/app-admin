<?php
    require 'session.php';
    session::checklogin();                    //login obosthay ache kina check er jonno
    require_once 'database.php';
?>

<?php
    class adminLogin{
        private $db;
        public function __construct(){
            $this->db = new database();
        }
        public function login($email, $password){
            
            if(empty($email) || empty($password)){
                $msg = "Email or passord must not be empty";
                return $msg;
            }
            else{
                $query = "select * from admin where email=? and password=?";
                $arr = array($email,$password);
                $result = $this->db->select($query, $arr);
                if($result != false){

                    session::set("loginShop",true);
                    session::set("adminId",$result[0]['id']);
                    session::set("adminEmail",$result[0]['email']);
                    header("Location: index.php");
                }
                else{
                    $msg = "Email or password not match.";
                    return $msg;
                }
            }
        }
}
?>