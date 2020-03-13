<?php
include('include/condb.php');
$query = "SELECT * FROM tm_history a INNER JOIN users b ON a.id_users = b.id";
$result = mysqli_query($condb, $query);
$i = 0;
?>
<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        @media print {
            .hide-prith {
                display: none;
            }
        }
    </style>

<body>
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">ค่าใช้จ่ายในการรักษา</h1>
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
                                                <label for="">ค่าใช้จ่าย</label>
                                                <input type="text" name="amount" class="form-control form-control-user" placeholder="ค่าใช้จ่าย" value="<?php echo $row['amount']; ?>">
                                            </div>
                                            <div class="col-md-6 col-lg-2">
                                                <label for="">วัน/เดือน/ปี</label>
                                                <input type="date" name="date" class="form-control form-control-user" placeholder="วัน/เดือน/ปี" value="<?php echo $row['date']; ?>">
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <label for="">Email</label>
                                                <input type="text" name="email" class="form-control form-control-user" placeholder="Email" value="<?php echo $row['email']; ?>">
                                            </div>
                                            <div class="col-md-6 col-lg-2">
                                                <label for="">Id User</label>
                                                <input type="text" name="id" class="form-control form-control-user" placeholder="Id User" value="<?php echo $row['id']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 col-lg-8">
                                                <label for="">ลายละเอียดการรักษา</label>
                                                <input type="text" name="treatmentdetails" class="form-control form-control-user" placeholder="" value="<?php echo $row['treatmentdetails']; ?>">
                                           

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-lg-2">
                                                
                                                
                                                    <?php
                                                    if ($row['position'] == "ทันตเเพทย์") { ?>

                                                        <option value="ทันตเเพทย์">ทันตเเพทย์</option>
                                                        <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>

                                                    <?php  } elseif ($row['position'] == "เจ้าหน้าที่") { ?>

                                                        

                                                    <?php } else { ?>

                                                        

                                                    <?php    }  ?>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-md-6 col-lg-4">
                                              
                                               
                                            </div>


                                       

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">

                                <div class="card-body">

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="text-center">
                                                <th width="">#</th>
                                                <th width="">ชื่อ - นามสกุล</th>
                                                <th width="">เพศ</th>
                                                <th width="">ลายละเอียดการรักษา</th>
                                                <th width="">การรักษา</th>
                                                <th width="">วันที่</th>
                                                <th width="">ค่าใช้จ่าย</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php while ($row = mysqli_fetch_array($result)) { ?>
                                                <tr class="text-center">
                                                    <td class="text-center"><?php echo ++$i; ?></td>
                                                    <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td>
                                                    <td><?php echo $row['sax']; ?></td>
                                                    <td><?php echo $row['treatmentdetails']; ?></td>
                                                    <td><?php echo $row['treatment']; ?></td>
                                                    <td><?php echo $row['datetime']; ?></td>
                                                    <td><?php echo $row['amount']; ?></td>
                                                    
                                                        
                                                
                                            <?php  } ?>
                                        </tbody>
                                    </table>
                                    
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>


    <input onclick="javascript:window.print()" type="button" class="hide-prith" value="คลิ๊กเพื่อ Print หน้านี้" name="print2">

</body>

</html>