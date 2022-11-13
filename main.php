<?php
    class Main{
        protected $host = "localhost";
        protected $user = "root";
        protected $pass = "";
        protected $db = "attendance";
        protected $con;
        protected $result;


        //database conection
        public function __construct(){
            if(!isset($this->con)){
                $this->con = new mysqli($this->host,$this->user,$this->pass,$this->db);
                if(!$this->con){
                    $_SESSION['error'] = "Can not Connect Database";
                }
            }
            return $this->con;
        }
        //login user data fetch method
        public function retrive($u){
            $username = $u;
            $this->sql = "SELECT * FROM `teacher` WHERE `t_email` = '$username'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo "error";
            }
        }
        public function retrivebyid($id){
            $this->sql = "SELECT * FROM `teacher` WHERE `t_id` = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo "error";
            }
        }
        //update pass
        public function update_pass($pass,$user_id)
        {
            $pass = $pass;
            $user_id = $user_id;
            $this->sql = "UPDATE `teacher` SET `password`= '$pass' WHERE t_id = '$user_id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        //update profile
        public function update_profile($id,$name,$email,$designation){
            $this->sql = "UPDATE `teacher` SET `t_name`='$name',`t_email`='$email',`t_designation`='$designation' WHERE `t_id` = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
    }

    // $obj = new Main();
    // $r = $obj->retrive("ashanur@gmail.com");
    // print_r($r);


?>