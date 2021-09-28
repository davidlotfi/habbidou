<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/unnamed.png">

    	<script src="js/jquery.min.js"></script>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css">

      <title>Vender vos Produit ...</title>
   <style media="screen">
        .imheigt{
          height: 150px;
          width: 270px;
          margin-right: 25px;
          position: relative;
        }
        .opcity:hover{
          opacity: 0.7;
          filter: alpha(opacity=50); /* For IE8 and earlier */
        }
   </style>
</head>
<body style="">

 <header>
   <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
     <div class="container">
       <a class="navbar-brand" href="index.php">Habbidou.com</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
             <a class="btn btn-secondary" href="ajouteProd.php">ابدأ البيع</a>
           </li>
           <li class="nav-item">
            <!--   <a class="nav-link" href="#">About</a> -->
           </li>
           <li class="nav-item">
              <!-- <a class="nav-link" href="#">Services</a> -->
           </li>
           <li class="nav-item">
            <!--   <a class="nav-link" href="#">Contact</a> -->
           </li>
         </ul>
       </div>
    </div>
   </nav>
 </header>

<br><br><br>
<div class="container">
    <h3 class="text-success text-right">كيف يمكنني البدء في البيع؟</h3>
        <h5 class="text-primary text-right"> Habbidou.com سجل لتصبح بائعًا على  <img src="images/check.25.png" alt="" style=""> </h5>
        <p class="text-right">إذا لم تقم ببيع منتجات على الإطلاق في الموقع فكل ما عليك فعله هو التسجيل في الموقع العملية بسيطة جدا .<a href="inscrir.php" target="_blank"> سجل من هنا</a> </p>
</div>

<div class="container mb-3">
   <div class="row">
     <section class="col-lg-5">
         <img class="img-thumbnail opcity" src="imagecat\francis-farago-ZD_R3lOqwSo-unsplash.jpg" alt="">
     </section>
      <section class="col-lg-7">
        <div class="row no-gutters">
          <div class="">
              <img class="img-thumbnail imheigt opcity" src="imagecat\denise-jans-HoqYAnwR-1g-unsplash.jpg" alt="">
          </div>
          <div class="">
              <img class="img-thumbnail imheigt opcity" src="imagecat\daniel-romero-q-RQba-XCgU-unsplash.jpg" alt="">
          </div>
          <div class="">
              <img class="img-thumbnail imheigt opcity" src="imagecat\museums-victoria-QSBm03YHtrI-unsplash.jpg" alt="">
          </div>
          <div class="">
              <img class="img-thumbnail imheigt opcity" src="imagecat\nnn.jpg" alt="">
          </div>
        </div>
      </section>
   </div>
</div>

<br>
<div class="container mb-4">
  <h3 class="text-right" style="color : var(--pink);">ابدأ في بيع منتجاتك وتنمية عملك</h3><br>
  <h5 class="text-center text-primary">أبيع ماذا؟</h5>
  <div class="row text-center">
      <section class="col-lg-2">
        <img src="images/games.png" alt="">
        <p>العاب الفيديو</p>
      </section>
      <section class="col-lg-2">
        <img src="images/laptop.png" alt="">
        <p>أجهزة الكمبيوتر</p>
      </section>
      <section class="col-lg-2">
        <img src="images/mobile.png" alt="">
        <p>الهواتف</p>
      </section>
      <section class="col-lg-2">
        <img src="images/tablette.png" alt="">
        <p>أجهزة لوحية</p>
      </section>
      <section class="col-lg-2">
        <img src="images/camera.png" alt="">
        <p>الكاميرات</p>
      </section>
      <section class="col-lg-2">
        <img src="images/audio.png" alt="">
        <p>سماعات الرأس والصوت</p>
      </section>
  </div><!-- row -->

  <div class="row text-center">
      <section class="col-lg-2">
        <img src="images/tv.png" alt="">
        <p>التلفزيونات</p>
      </section>
      <section class="col-lg-2">
        <img src="images/bureau.png" alt="">
        <p>اللوازم المكتبية</p>
      </section>
      <section class="col-lg-2">
        <img src="images/tools.png" alt="">
        <p>الأدوات المنزلية</p>
      </section>
      <section class="col-lg-2">
        <img src="images/watch.png" alt="">
        <p>الساعات المستعملة</p>
      </section>
      <section class="col-lg-2">
        <img src="images/elctromenage.png" alt="">
        <p>اجهزة كهرومنزلية</p>
      </section>
      <section class="col-lg-2">
        <img src="images/kitchen.png" alt="">
        <p>الاجهزة الصغيرة</p>
      </section>
  </div><!-- row2 -->

 </div>

<?php include('include/footer.php'); ?>
