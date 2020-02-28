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


    </style>

<body>
    <div class="text-center">ค่าใช่จ่ายในการรักษา

    </div>
    <div class="row">
        <div class="col-sm-6">ซื่อ
            <input type="text" name="lastname" class="form-control form-control-user" id="exampleLastName" placeholder="pattarxxxx">
        </div>
        <div class="col-sm-6">ที่อยู่
            <input type="text" name="lastname" class="form-control form-control-user" id="exampleLastName" placeholder="1057/52ลาดพร้าว">
        </div>
    </div>
    <br>

    </div>
    <div class="row">
        <div class="col-sm-4">เบอร์โทร
            <input type="text" name="lastname" class="form-control form-control-user" id="exampleLastName" placeholder="08x-xxxx-xxx">
        </div>
        <div class="col-sm-4">วัน/เดือน/ปี
            <input type="date" name="lastname" class="form-control form-control-user" id="exampleLastName" placeholder="pattarxxxx"><br>
        </div>

        <div class="col-sm-4 ">เพศ
            <select class="form-control" name=" sax" required>
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
    </div>
    <br>
    <br>
    <br>
    <br>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr class="text-center">
                <th width="">#</th>
                <th width="">ชื่อ - นามสกุล</th>
                <th width="">วัน เดือน ปี</th>
                <th width="">การรักษา</th>
                <th width="">รายละเอียด</th>
                <th width="">ค่าใช้จ่าย</th>
            </tr>
        </thead>

        <tbody>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td class="text-center"><?php echo ++$i; ?></td>
                    <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td>
                    <td><?php echo $row['sax']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td class="text-center">
                        <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">แก้ไข</a>
                        ||
                        <a href="del_user.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Do you want to delete this record? !!!')" class="btn btn-sm btn-danger">ลบ</a></td>
                </tr>
            <?php  } ?>
        </tbody>
    </table>
</body>

</html>