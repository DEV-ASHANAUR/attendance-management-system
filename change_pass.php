<?php
    session_start();
    include 'main.php';
    $obj = new Main();
    include "Flash_data.php";
    $user_id = $_SESSION['user_id'];
    if(isset($_POST['submit'])){
        $old_pass = $_POST['old_password'];
        $new_pass = $_POST['password1'];
        $con_pass = $_POST['password2'];
        if($new_pass == $con_pass){
            $data = $obj->retrivebyid($user_id);
            if($data->num_rows>0){
                while($row = $data->fetch_object()){
                $db_pass = $row->password;
                }
            }
            if(md5($old_pass) == $db_pass){
                $status = $obj->update_pass(md5($new_pass),$user_id);
                if($status == true){
                    Flass_data::update_head('Password Change Successfully!');
                    header("location:setting.php");
                }else{
                    Flass_data::update_pass_error('Error!');
                    header("location:setting.php");
                }
            }else{
                Flass_data::update_pass_error('Your Old Password is not Correct!');
                header("location:setting.php");
            }
        }else{
            Flass_data::update_pass_error('Your current and new password does not match!');
            header("location:setting.php");
        }
    }else{
        header('location:setting.php');
    }


?>