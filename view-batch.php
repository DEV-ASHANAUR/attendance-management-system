<?php
    $page = "manage_class";
    $sub_page = "view_batch";
    include("header.php");
    include "main.php";
    $obj = new Main();

    $data = $obj->viewBatch();
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Manage Class</h1>

    <div class="row">
        <div class="col-md-7">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">View Batch</h6>
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
                                    <th>Batch Id</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Batch Id</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>

                                <?php
                                    if($data->num_rows > 0){
                                        while($row = $data->fetch_object()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $row->batch_id; ?></td>
                                                    <td><?php echo $row->description; ?></td>
                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-primary">Update</a>
                                                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
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
        <div class="col-md-5">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Batch</h6>
                </div>
                <div class="card-body">
                    <form action="add-batch.php" method="post">
                        <div class="form-group">
                            <label for="name">Batch Id</label>
                            <input type="text" name="batchId" class="form-control" placeholder="Batch Id" required />
                        </div>
                        <div class="form-group">
                            <label for="name">Description</label>
                            <textarea name="description" class="form-control" rows="5" placeholder="Enter Description">lorem ipsum dami text!</textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit"  class="btn btn-success"  />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
    include("footer.php");
?>        