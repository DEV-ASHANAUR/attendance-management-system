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
    }else{
        header("location:index.php");
    }



?>