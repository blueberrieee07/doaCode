<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

    <title>SB Admin 2 - กลับไปหน้าหลัก</title>

    <!-- Custom fonts for this template-->
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .card-body:hover {
            color: red;
        }
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
                
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style>
  
    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
  </style>
</head>
<body>
<!--Card content-->
<div class="card-body d-sm-flex justify-content-between">

<h4 class="mb-2 mb-sm-0 pt-1">
  <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">กราฟรายเดือน</a>
  <span>/</span>
  <span>ผู้เข้ารับบริการ</span>
</h4> 

<form class="d-flex justify-content-center">
  <!-- Default input -->
  <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
  <button class="btn btn-primary btn-sm my-0 p" type="submit">
    <i class="fas fa-search"></i>
  </button>

</form>

</div>

</div>
<!-- Heading -->

<!--Grid row-->
<div class="row wow fadeIn">

<!--Grid column-->
<div class="col-md-9 mb-4">

<!--Card-->
<div class="card">

  <!--Card content-->
  <div class="card-body">

    <canvas id="myChart"></canvas>

  </div>

</div>
<!--/.Card-->

</div>
<!--Grid column-->

<!--Grid column-->
<div class="col-md-3 mb-4">



<!--Card-->

<div class="card mb-4">

  <!--Card content-->
  <div class="card-body">

    <!-- List group links -->
    <div class="list-group list-group-flush">
      <a class="list-group-item list-group-item-action waves-effect">มกราคม
        <span class="badge badge-success badge-pill pull-right">22%
          <i class="fas fa-arrow-up ml-1"></i>
        </span>
      </a>
      <a class="list-group-item list-group-item-action waves-effect">กุมภาพันธ์
        <span class="badge badge-danger badge-pill pull-right">5%
          <i class="fas fa-arrow-down ml-1"></i>
        </span>
      </a>
      <a class="list-group-item list-group-item-action waves-effect">มีนาคม
        <span class="badge badge-danger badge-pill pull-right">5%
          <i class="fas fa-arrow-down ml-1"></i>
        </span>
      </a>
      <a class="list-group-item list-group-item-action waves-effect">เมษายน
        <span class="badge badge-danger badge-pill pull-right">5%
          <i class="fas fa-arrow-down ml-1"></i>
        </span>
      </a>
      <a class="list-group-item list-group-item-action waves-effect">พฤษภาคม
        <span class="badge badge-danger badge-pill pull-right">5%
          <i class="fas fa-arrow-down ml-1"></i>
        </span>
      </a>
    </div>
    <!-- List group links -->
    <div class="list-group list-group-flush">
      <a class="list-group-item list-group-item-action waves-effect">มิถุนายน  
        <span class="badge badge-success badge-pill pull-right">22%
          <i class="fas fa-arrow-up ml-1"></i>
        </span>
      </a>
      <a class="list-group-item list-group-item-action waves-effect">กรกฎาคม
        <span class="badge badge-danger badge-pill pull-right">5%
          <i class="fas fa-arrow-down ml-1"></i>
        </span>
      </a>
      <a class="list-group-item list-group-item-action waves-effect">สิงหาคม
        <span class="badge badge-danger badge-pill pull-right">5%
          <i class="fas fa-arrow-down ml-1"></i>
        </span>
      </a>
      <a class="list-group-item list-group-item-action waves-effect">กันยายน  
        <span class="badge badge-danger badge-pill pull-right">5%
          <i class="fas fa-arrow-down ml-1"></i>
        </span>
      </a>
      <a class="list-group-item list-group-item-action waves-effect">ตุลาคม 
        <span class="badge badge-danger badge-pill pull-right">5%
          <i class="fas fa-arrow-down ml-1"></i>
        </span>
      </a>
      <a class="list-group-item list-group-item-action waves-effect">พฤศจิกายน 
        <span class="badge badge-danger badge-pill pull-right">5%
          <i class="fas fa-arrow-down ml-1"></i>
        </span>
      </a>
      <a class="list-group-item list-group-item-action waves-effect">ธันวาคม 
        <span class="badge badge-danger badge-pill pull-right">5%
          <i class="fas fa-arrow-down ml-1"></i>
        </span>
      </a>
    </div>
    <!-- List group links -->

  </div>

</div>





     


<script src="https://cdnjs.com/libraries/Chart.jshttps://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
                  
<script>
    // Line
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
    //pie
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
      type: 'pie',
      data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [{
          data: [300, 50, 100, 40, 120],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true,
        legend: false
      }
    });
    </script>
</body>

</html>