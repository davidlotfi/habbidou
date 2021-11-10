<?php
require_once('include/Connexion.php');
session_start();
if (isset($_SESSION['pseudo'])) {
  $user=$_SESSION['pseudo'];
 }else {
  $user='';
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" ng-app="myApp">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="description" content="منصة الكترونية جزائرية تسمح ببيع و شراء السيرات منصة مجانية كما توفر ايضا -الاجهزة الكهرو منزلية -العاب الفيديو - كتب - ملابس ...الخ">
      <meta name="keywords" content="web algeria, veder produit, voiture, marketplace, ecommerce dz">

      <!-- icon logo styles css  & bootstrap -->
      <link rel="icon" href="images/unnamed.png">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/container2.css">
      <link rel="stylesheet" href="css/list.css">

      <!-- fram Angularjs -->
      <script src="lib/angular.min.js"></script>
      <script src="Angularjs/data.js"></script>
      <title> بيع و شراء السيرات في الجزائر، مستلزمات المنازل،العاب فيديو، اطفال، ملابس، اعلام الي، كتب  Habbidou.com :</title>

    <style media="screen">
         body{
             background-color:#F2F2F2;
            }
         .bvbv{
           height: 500px;
           width: 100%;
           }
         .dropdown-item:hover{
           background-color:#007bff;
           color: white;
           }
         .dropdown-item{
           color:#24292e;
         }
         .opc:hover{
           //opacity: 0.7;
         }
        .cdd:hover{
             border: 1px solid #007bff;
        }
        .inner {
          overflow: hidden;
        }
         .inner img{
           transition: all 0.3s ease;
         }
         .inner:hover img{
           transform: scale(1.2);
         }
         .list-group-item{
           padding:8px;
         }
         .list-group-item:hover{
            color: #337ab7;
            cursor: pointer;
          }
          .list-group{
            margin-top: 10px;
            position: fixed;
          }
          .git-text{
            font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji;
            font-size: 14px;
            line-height: 1.25!important;
          }
          .dropdown:hover>.dropdown-menu {
              display: block;
          }
          .dropdown-menu{
		         border-radius:8px;
		         box-shadow: 0 6px 12px #00000014;
		         margin-top:0;
	  	     }
    </style>
  </head>

<body>
 <header>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

     <div class="container">

       <span class="catMenu" style="font-size:30px;cursor:pointer;"Lato", sans-serif" onclick="openNav()">&#9776;</span>
       <a class="navbar-brand" href="index.php">Habbidou.com</a>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarResponsive">

        <form class="form-inline" action="<?php echo "irchhjklmres.php"; ?>" method="post">
          <div ng-controller="myCtrl" ng-init="loadCountry()">
            <input  class="form-control mr-2" type="text" name="rcle" placeholder="Search" autocomplete="off"  ng-model="country" ng-keyup="complete(country)"  value="" style="width:380px;padding-left:18px;">
            <button class="btn btn-success" type="submit" name="button">Go</button>
            <ul class="list-group col-md-4" ng-show="country">
              <li class="list-group-item" ng-repeat="Mrecherche in filterCountry | limitTo:6" ng-click="fillTextbox(Mrecherche)">{{Mrecherche}}</li>
            </ul>
          </div>
        </form>
        <ul class="navbar-nav ml-auto">
        <li class="dropdown">
            <a class="nav-item nav-link dropdown-toggle" href="#" data-toggle="dropdown">حسابي</a>
            <div class="dropdown-menu" href="#">
              <a class="dropdown-item" href=""><i class="fas fa-user-circle"></i> <?php if($user == null){echo "عرف نفسك";}else { echo htmlspecialchars($user); } ?> </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="ajouteProd.php"><i class="fab fa-telegram-plane"></i> بيع منتج</a>
              <a class="dropdown-item" href="renewed.php"><i class="far fa-money-bill-alt"></i> كيفيةالبيع</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="controleur/logout.php"><i class="fas fa-power-off"></i> خروج </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ajouteProd.php">دخول</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="inscrir.php">تسجيل</a>
          </li>
        </ul>
       </div>
    </div>
   </nav>
 </header>
