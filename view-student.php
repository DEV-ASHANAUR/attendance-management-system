<?php
    $page = "manage_student";
    $sub_page = "view_student";
    include("header.php");
    include("main.php");
    $obj = new Main();

    $batch = $obj->viewBatch();
    $class = $obj->viewClass();
    $data = $obj->viewStudent();

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Manage Student</h1>

    <div class="row">
    <div class="col-md-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Student</h6>
                </div>
                <div class="card-body">
                    <form action="add-student.php" method="post">
                        <div class="form-group">
                            <label for="name">Student Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Student Name" />
                        </div>
                        <div class="form-group">
                            <label for="name">Father's Name</label>
                            <input type="text" name="father" class="form-control" placeholder="Father's Name" />
                        </div>
                        <div class="form-group">
                            <label for="name">Mother's Name</label>
                            <input type="text" name="mother" class="form-control" placeholder="Mother's Name" />
                        </div>
                        <div class="form-group">
                            <label for="class">Select Batch</label>
                            <select name="batch_id" class="form-control" id="class" required>
                                <?php
                                    if($batch->num_rows>0){
                                        while($bat = $batch->fetch_object()){
                                            ?>
                                                <option value="<?php echo $bat->batch_id; ?>"><?php echo $bat->batch_id; ?></option>
                                            <?php
                                        }
                                    }
                                ?>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="batch">Select Class</label>
                            <select name="class_id" class="form-control" id="batch">
                            <?php
                                    if($class->num_rows>0){
                                        while($cal = $class->fetch_object()){
                                            ?>
                                                <option value="<?php echo $cal->class_id; ?>"><?php echo $cal->class_name; ?></option>
                                            <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Phone Number</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-success"  />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">View Student</h6>
                </div>
                <?php
                    if(isset($_SESSION['msg']['addTeacher'])){
                        ?>
                            <script type="text/javascript">
                                toastr.success("<?php echo Flass_data::show_error();?>");
                            </script>
                        <?php 
                        }
                    ?>
                    <?php
                    if(isset($_SESSION['msg']['teacher_error'])){
                        ?>
                            <script type="text/javascript">
                                toastr.error("<?php echo Flass_data::show_error();?>");
                            </script>
                        <?php 
                    }
                ?>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Student id</th>
                                    <th>Name</th>
                                    <th>Father</th>
                                    <th>Mother</th>
                                    <th>Batch</th>
                                    <th>Class</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Student id</th>
                                    <th>Name</th>
                                    <th>Father</th>
                                    <th>Mother</th>
                                    <th>Batch</th>
                                    <th>Class</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    if($data->num_rows>0){
                                        while($row = $data->fetch_object()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $row->s_id; ?></td>
                                                    <td><?php echo $row->s_name; ?></td>
                                                    <td><?php echo $row->s_father; ?></td>
                                                    <td><?php echo $row->s_mother; ?></td>
                                                    <td><?php echo $row->batch_id; ?></td>
                                                    <td><?php echo $row->class_name; ?></td>
                                                    <td><?php echo $row->phone; ?></td>
                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-primary my-1">Update</a>
                                                        <a href="#" class="btn btn-sm btn-danger my-1">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</div>
<!-- /.container-fluid -->

<?php
    include("footer.php");
?>        