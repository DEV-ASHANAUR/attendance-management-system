<?php
    session_start();
    include "Flash_data.php";
    $id = $_SESSION['user_id'];
    include "main.php";
    $obj = new Main();
    
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $designation = $_POST['designation'];
        $status = $obj->update_profile($id,$name,$email,$designation);
        if($status == true){
            Flass_data::update_head('Profile Update Successfully!');
            header("location:profile.php");
        }else{
            echo 'false';
        }
    }else{
        header('location:index.php');
    }

?>