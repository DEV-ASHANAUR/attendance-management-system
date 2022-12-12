<?php
    session_start();
    include "Flash_data.php";
    include "main.php";
    $obj = new Main();

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $father = $_POST['father'];
        $mother = $_POST['mother'];
        $batch_id = $_POST['batch_id'];
        $class_id = $_POST['class_id'];
        $phone = $_POST['phone'];
        $find = $obj->findStudent($batch_id,$class_id);
        if($find->num_rows > 0){
            while($row = $find->fetch_object()){
                $studentId = $row->s_id;
            }
            $id = $studentId+1;
            
            $status = $obj->addStudent($id,$name,$father,$mother,$batch_id,$class_id,$phone);
            $status = $obj->addBatch($batchId,$description);
            if($status == true){
                Flass_data::addTeacher('Student Reg SuccessFully!');
                header("location:view-student.php"); 
            }else{
                Flass_data::teacherError('Something Went Worng!');
                header("location:view-student.php"); 
            }
        }else{
            $class = sprintf("%02d", $class_id);
            $studentId = $batch_id . $class . "01";
            // echo $studentId;
            $status = $obj->addStudent($studentId,$name,$father,$mother,$batch_id,$class_id,$phone);
            if($status == true){
                Flass_data::addTeacher('Student Reg SuccessFully!');
                header("location:view-student.php"); 
            }else{
                Flass_data::teacherError('Something Went Worng!');
                header("location:view-student.php"); 
            }
        }
        
    }


?>