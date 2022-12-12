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
        //add teacher
        public function addTeacher($name,$email,$designation,$role,$password){
            $this->sql = "INSERT INTO `teacher`(`t_name`, `t_email`, `t_designation`, `password`, `role`) VALUES ('$name','$email','$designation','$password','$role')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        //view all teacer 
        public function viewTeacher(){
            $this->sql = "SELECT * FROM `teacher`";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        //delete teacher
        public function teacherDelete($id){
            $id =$id;
            $this->sql = "DELETE FROM `teacher` WHERE t_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result){
                return true;
            }else{
                return false;
            }
        }
        //make and undo admin
        public function makeAdmin($id,$role){
            $this->sql = "UPDATE `teacher` SET `role`='$role' WHERE t_id = $id";
            $this->result = $this->con->query($this->sql);
            if($this->result){
                return true;
            }else{
                return false;
            }
        }
        //add batch
        public function addBatch($batchId,$description){
            $this->sql = "INSERT INTO `batch`(`batch_id`, `description`) VALUES ('$batchId','$description')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        //find batch
        public function findBatch($batchId){
            $this->sql = "SELECT * FROM `batch` WHERE batch_id = '$batchId'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        //view batch
        public function viewBatch(){
            $this->sql = "SELECT * FROM `batch`";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        //add class
        public function addClass($class_name,$description){
            $this->sql = "INSERT INTO `class`(`class_name`, `class_description`) VALUES ('$class_name','$description')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        //view class
        public function viewClass(){
            $this->sql = "SELECT * FROM `class`";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        //findStudent
        public function findStudent($batch_id,$class_id){
            $this->sql = "SELECT * FROM `student` WHERE batch_id = '$batch_id' AND class_id = '$class_id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        //addStudent($studentId,$name,$father,$mother,$batch_id,$class_id,$phone)
        public function addStudent($studentId,$name,$father,$mother,$batch_id,$class_id,$phone){
            $this->sql = "INSERT INTO `student`(`s_id`, `s_name`, `s_father`, `s_mother`, `batch_id`, `class_id`, `phone`) VALUES ('$studentId','$name','$father','$mother','$batch_id','$class_id','$phone')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }

        public function viewStudent(){
            $this->sql = "SELECT s.s_id,s.s_name,s.s_father,s.s_mother,s.phone,b.batch_id,c.class_name FROM student as s INNER JOIN batch AS b ON s.batch_id = b.batch_id INNER JOIN class as c on s.class_id = c.class_id";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        //check present 
        public function checkPresent($date,$batch_id,$class_id){
            $this->sql = "SELECT * FROM `present` WHERE p_date = '$date' AND batch_id = '$batch_id' AND class_id = '$class_id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        //take present
        public function takePresent($date,$present,$batch_id,$class_id){
            $this->sql = "INSERT INTO `present`(`present`, `batch_id`, `class_id`, `p_date`) VALUES ('$present','$batch_id','$class_id','$date')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        //update present
        public function updatePresent($date,$present,$batch_id,$class_id){
            $this->sql = "UPDATE `present` SET `present`='$present' WHERE p_date = '$date' AND batch_id = '$batch_id' AND class_id = '$class_id'";
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