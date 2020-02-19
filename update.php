<?php
//1. เชื่อมต่อ database: 
include('include/condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

$id = $_GET["id"];

//2. query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM users WHERE id=$id ";
$result = mysqli_query($condb, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blankeesee</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>


    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('include/sidebar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('include/topbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">

                                <div class="card-body">

                                    <form action="update_edit.php" method="POST">
                                        <div class="form-group row">
                                            <div class="col-md-12 col-lg-4">
                                                <label for="">ซื่อ</label>
                                                <input type="text" name="firstname" class="form-control form-control-user" placeholder="First Name" value="<?php echo $row['firstname']; ?>">
                                            </div>
                                            <div class="col-md-12 col-lg-4">
                                                <label for="">นามสกุล</label>
                                                <input type="text" name="lastname" class="form-control form-control-user" placeholder="Last Name" value="<?php echo $row['lastname']; ?>">
                                            </div>
                                            <div class="col-md-6 col-lg-2">
                                                <label for="">เพศ</label>
                                                <select class="form-control" name="sax" required>
                                                    <?php
                                                    if ($row['sax'] == "ชาย") { ?>

                                                        <option value="ชาย">ชาย</option>
                                                        <option value="หญิง">หญิง</option>

                                                    <?php  } elseif ($row['sax'] == "หญิง") { ?>

                                                        <option value="หญิง">หญิง</option>
                                                        <option value="ชาย">ชาย</option>

                                                    <?php } else { ?>

                                                        <option value="">เพศ</option>
                                                        <option value="ชาย">ชาย</option>
                                                        <option value="หญิง">หญิง</option>

                                                    <?php    }  ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg-2">

                                                <label for="">อายุ</label>
                                                <input type="text" name="age" class="form-control form-control-user" placeholder="อายุ" value="<?php echo $row['age']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">

                                            <div class="col-md-6 col-lg-4">
                                                <label for="">เลขบัตรประชาชน</label>
                                                <input type="text" name="idcard" class="form-control form-control-user" placeholder="เลขบัตรประชาชน" value="<?php echo $row['idcard']; ?>">
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <label for="">วัน/เดือน/ปี</label>
                                                <input type="date" name="date" class="form-control form-control-user" placeholder="วัน/เดือน/ปี" value="<?php echo $row['date']; ?>">
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <label for="">Email</label>
                                                <input type="text" name="email" class="form-control form-control-user" placeholder="Email" value="<?php echo $row['email']; ?>">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 col-lg-8">
                                                <label for="">ที่อยู่</label>
                                                <input type="text" name="address" class="form-control form-control-user" placeholder="ที่อยู่" value="<?php echo $row['address']; ?>">
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <label for="">เบอร์โทรศัพท์</label>
                                                <input type="text" name="number" class="form-control form-control-user" placeholder="เบอร์โทรศัพท์" value="<?php echo $row['number']; ?>">
                                            </div>

                                        </div>
                                        <div class="col-12 text-center pt-5">

                                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                                            <button type="submit" name="save" class="col-sm-2  btn btn-primary ">
                                                บันทึก

                                            </button>
                                            <button type="submit" name="cancel" class="col-sm-2  btn btn-danger">

                                                ยกเลิก

                                            </button>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>