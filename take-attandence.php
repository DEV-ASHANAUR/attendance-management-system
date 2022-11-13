<?php
    $page = "manage_attendance";
    $sub_page = "attendance";
    include("header.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Manage Attendance</h1>

    <div class="row">
        <div class="col-md-7">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Load Student</h6>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="">Select Class</label>
                            <select name="" class="form-control" id="">
                                <option value="">one</option>
                                <option value="">two</option>
                                <option value="">three</option>
                                <option value="">four</option>
                                <option value="">five</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit"  class="btn btn-success"  />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 ">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Take Attendance</h6>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="date">Select Date</label>
                           <input id="date" type="date" class="form-control" />  
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