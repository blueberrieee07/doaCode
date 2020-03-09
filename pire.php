<?php
include('include/condb.php');
$query = "SELECT * FROM tm_history a INNER JOIN users b ON a.id_users = b.id";
$result = mysqli_query($condb, $query);
$i = 0;
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
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                <html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Carousel Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
 




  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>ตรวจฟัน</h2>
        <p>การตรวจช่องปากด้วยตนเองเป็นวิธีการเบื้องต้นในการดูแลสุขภาพฟันและเหงือก สามารถปฏิบัติได้ง่ายและประหยัดเวลา โดยใช้อุปกรณ์เพียงกระจกเงาส่องหน้าธรรมดา อาจจะใช้กระจกเงาเล็ก ๆ อีกหนึ่งอันช่วยสะท้อนให้เห็นบริเวณที่มองเห็นตรง ๆ ไม่ได้ ทำไมต้องตรวจช่องปากด้วย.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>ถอนฟัน</h2>
        <p>เมื่อถอนฟันเสร็จสิ้นแล้ว ทันตแพทย์จะปิดแผลด้วยผ้าก๊อซ บางกรณีถ้าแผลกว้าง หรือแผลลึกมาก เช่น การถอนฟันคุด ทันตแพทย์อาจต้องเย็บแผลเพื่อให้เลือดหยุดไหลและแผลปิดสนิท สมานตัวกันเร็วยิ่งขึ้น ทันตแพทย์ให้คำแนะนำเกี่ยวกับข้อปฏิบัติและการดูแลแผลที่เกิดจากการถอนฟันรวมทั้งการดูแลทำความสะอาดการอุดฟันสามารถช่วยป้องกันการผุเพิ่มขึ้นด้วยการปิดช่องทางที่แบคทีเรียสามารถเข้าไปได้ วัสดุที่ใช้ในการอุดฟันได้แก่ ทอง พอร์เซเลน คอมโพสิตเรซิน (การอุดฟันด้วยวัสดุสีเหมือนฟัน) และอมัลกัม (วัสดุอุดฟันทำจากโลหะปรอท เงิน ทองแดง และสังกะสี</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>อุดฟัน</h2>
        <p>การอุดฟันคือวิธีการรักษาฟันที่ถูกทำลายจากการผุให้สามารถใช้งานได้และกลับมารูปทรงเดิม เวลาทำการอุดฟัน ทันตแพทย์จะเอาเนื้อฟันที่ผุออกและทำความสะอาด จากนั้นจึงเติมวัสดุอุดฟันลงไป</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">ทันตกรรมจัดฟัน <span class="text-muted"></span></h2>
        <p class="lead">การจัดฟัน สามารถแก้ไขปัญหา
ฟันไม่สวย ฟันหน้ายื่น ฟันซ้อน ฟันเก ยิ้มไม่มั่นใจ กัดฟันไม่ได้ ให้หมดไป
ปัจจุบัน จัดฟัน ราคา ค่อนข้างหลากหลาย
ชนิดของเครื่องมือจัดฟันเอง หลายแบบให้เลือกตามความต้องการ
เช่น เซรามิก โลหะ ดามอน(damon) จัดฟันแบบใส invisalign
ซึ่งสามารถเลือกได้ตามวัตถุประสงค์ตามต้องการ รวมถึง life style แต่ละคน</p>
      </div>
      <div class="col-md-5">
          <img src="https://www.ttdcdental.com/wp-content/uploads/2019/12/9-1-braces-be-beautiful-800x423.jpg" alt="" srcset="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading ">ขูดหินปูน คือ <span class="text-muted"> </span></h2>
        <p class="lead">การทำให้ฟันที่มีสีคล้ำ ดูขาวขึ้น สำหรับฟันที่เปลี่ยนสีจะเกิดจาก 2 สาเหตุหลัก คือสาเหตุจากภายนอกตัวฟัน เช่น สีจากอาหาร เครื่องดื่มเช่น ชา กาแฟ และเกิดจาก บุหรี่ เป็นต้น และสาเหตุจากภายในตัวฟัน เช่น การสะสมของสารเคมีที่มีสีข้างในเนื้อฟันขณะสร้างฟัน หรือในกรณีของฟันตาย เป็นต้น.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="img/den1.jpg" alt="" srcset=""style="width:400px;">
    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">ผ่าฟันขุด คือ <span class="text-muted"></span></h2>
        <p class="lead">ก่อนที่จะทำการถอนฟัน ทันตแพทย์จะตรวจประวัติทางการแพทย์และประวัติทางทันตกรรมอย่างถี่ถ้วน และจะทำการเอ็กซ์เรย์ฟัน
การเอ็กซ์เรย์จะทำให้เห็นถึงความยาว รูปร่างและตำแหน่งของฟันและกระดูกบริเวณรอบๆ ฟัน จากข้อมูลที่ได้ ทันตแพทย์จะสามารถประมาณระดับความยุ่งยากของกระบวนการการถอนฟัน และตัดสินใจว่าจะส่งตัวคุณไปหาผู้เชี่ยวชาญ หรือ ศัลยแพทย์ช่องปาก หรือไม่
ก่อนทำการถอนฟัน ทันตแพทย์จะฉีดยาชาบริเวณรอบๆ ฟันที่จะถูกถอน .</p>
      </div>
      <div class="col-md-5">
      <img src="https://pbs.twimg.com/media/ELDzHDVUYAE4-I1.jpg" alt="" srcset=""style="width:400px;">      
    </div>
    </div>
    
    

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>© 2017-2019 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

</body></html>
                    
</html>