<?php
    session_start();
    include "main.php";
    include "Flash_data.php";
    $obj = new Main();

    if(isset($_POST["submit"])){
        if($_POST["up"] == "batch"){
            $id = $_POST["id"];
            $batch_id = $_POST["batchId"];
            $description = $_POST["description"];
            $status = $obj->updateBatch($id, $batch_id,$description);
            if($status == true){
                Flass_data::addTeacher('Batch Updated SuccessFully!');
                header("location:view-batch.php");
            }else{
                Flass_data::teacherError('Something Went Worng!');
                header("location:view-batch.php"); 
            }
        }
        if($_POST["up"] == "class"){
            $id = $_POST["id"];
            $class_name = $_POST["class_name"];
            $description = $_POST["description"];
            $status = $obj->updateClass($id,$class_name,$description);
            if($status == true){
                Flass_data::addTeacher('Class Updated SuccessFully!');
                header("location:view-class.php");
            }else{
                Flass_data::teacherError('Something Went Worng!');
                header("location:view-class.php"); 
            }
        }
    }else{
        header("location:index.php");
    }



?>