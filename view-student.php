<?php
$page = "manage_student";
$sub_page = "view_student";
    include("header.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Manage Student</h1>

    <div class="row">
        <div class="col-md-7">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">View Student</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Student id</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Student id</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>phone</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>Md Ashanur Rahman</td>
                                    <td>Four</td>
                                    <td>01866936562</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary my-1">Update</a>
                                        <a href="#" class="btn btn-sm btn-danger my-1">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Student</h6>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Student ID</label>
                            <input type="text"  class="form-control" placeholder="Teacher Name" />
                        </div>
                        <div class="form-group">
                            <label for="name">Student Name</label>
                            <input type="text"  class="form-control" placeholder="Teacher Name" />
                        </div>
                        <div class="form-group">
                            <label for="name">Select Class</label>
                            <select name="classid" class="form-control" id="">
                                <option value="">one</option>
                                <option value="">two</option>
                                <option value="">three</option>
                                <option value="">four</option>
                                <option value="">five</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Student Phone</label>
                            <input type="text"  class="form-control" placeholder="Student Phone" />
                        </div>
                        <div class="form-group">
                            <input type="submit"  class="btn btn-success"  />
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