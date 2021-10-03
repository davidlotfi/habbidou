<?php
  session_start();
  if(!isset($_SESSION['pseudo'])){

    header('location:login.php');
  }
  include_once('ajouteProd_post.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- icon logo styles css  & bootstrap -->
    <link rel="icon" href="images/unnamed.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ajouteProd.css">
    <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css">
  
    <title>habbidou.com</title>

  <style media="screen">
     h2{
       color: #40bf16;
     }
     .filePrev{
      background: rgba(0,0,0,.3);
      border: 1px solid rgba(0,0,0,.5);
      border-radius: 3px;
      margin: 0 auto 15px;
      padding: 10px;
      width: 40%;
     }
     .prevIMG{
       max-width: 100px;
       margin-left: 4px;
       float: left;
     }
    .box:hover {
       transform:scale(1.7);
       transition: transform .2s;
       border: 1px solid #007bff;
      }
     label{
      color: #c61c6f;
      }
     .dropdown-menu {
          left: auto;
          right: 20px;
         }

  </style>
</head>

<body>

 <header>
   <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
     <div class="container">
       <a class="navbar-brand" href="#">habbidou.com</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
            <a class="nav-link" href="index.php"> <!--<i class='fas fa-home' style='font-size:20px'></i>--> الرئسية</a>
           </li>
           <li class="nav-item">
              <!-- <a class="nav-link"  href="#">About</a>-->
           </li>
           <li class="nav-item">
             <a class="nav-link" href="renewed.php">ماذا ابيع</a>
           </li>
           <li class="nav-item">
              <a class="nav-item nav-link dropdown-toggle" data-toggle="dropdown" href="#"><i class='fas fa-user-circle' style='font-size:20px'></i></a>
              <div class="dropdown-menu" href="#">
                 <a class="dropdown-item" href="controleur/logout.php"><i class="fas fa-power-off"></i> خروج</a>
              </div>
           </li>

         </ul>
       </div>
    </div>
   </nav>

 </header>
 <br><br><br>
 
 <div class="container mb-4">
  <div class="alert alert-success text-right" role="alert">  مرحبا يمكن بدا البيع  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </div>

   <div class="<?php echo $message_class; ?>" role="alert"><?php echo $message_erro;?></div>

     <h2 class="text-center"><em><!--Ajoute un Produit--></em></h2>
    <form action="ajouteProd_post.php"  enctype="multipart/form-data"  method="post">

        <div class="row">
               <div class="col-lg-12">
                 <div class="row">
                   <input type="file" name="1" onchange="document.getElementById('1').src = window.URL.createObjectURL(this.files[0])"  required/>
                   <input type="file" name="2" onchange="document.getElementById('2').src = window.URL.createObjectURL(this.files[0])"  />
                   <input type="file" name="3" onchange="document.getElementById('3').src = window.URL.createObjectURL(this.files[0])"  />
                   <input type="file" name="4" onchange="document.getElementById('4').src = window.URL.createObjectURL(this.files[0])"  />
                 </div>
               </div><br><br><br>
               <div class="filePrev">
                   <img  class="prevIMG box" id="1" src="images/image.png"  alt="your image"/>
                   <img  class="prevIMG box" id="2" src="images/image.png"  alt="your image"/>
                   <img  class="prevIMG box" id="3" src="images/image.png"  alt="your image"/>
                   <img  class="prevIMG box" id="4" src="images/image.png"  alt="your image"/>
               </div>
         </div>


       <div class="form-group form-group-lg">
         <label class="col-sm-2 control-label">Déscription</label>
         <div class="col-sm-10 col-md-6">
         <input  name="_description" id="des" type="text" class="form-control" id="" placeholder="description" maxlength="58" required>
          <div class="message"></div>

         </div>
       </div>
       <div class="form-group form-group-lg">
         <label class="col-sm-2 control-label">Détails</label>
         <div class="col-sm-10 col-md-6">
           <textarea class="form-control" name="_detail" rows="5" required></textarea>
          <div class="message"></div>

         </div>
       </div>

       <div class="form-group form-group-lg">

          <div class="col-sm-10 col-md-6">
              <label class="col-sm-2 control-label">Prix :</label>
             <a class="link" data-toggle="modal" data-target=".bd-example-modal-sm" href="" style="float:right">Voir l'exemple</a><br>
              <div class="input-group ">

                  <input name="_prix" type="text" class="form-control" id="Prix" placeholder="le prix en DA Algerinne" maxlength="11" required>
                   <div class="input-group-append">
                          <div class="input-group-text">DA</div>
                   </div>
             </div>

             <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Habbidou.com</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                       <div class="card"  style="border: 1px solid #777;">
                         <img class="card-img-top" src="images/puzzle.jpg" alt="Card image cap" style="height:130px">
                         <div class="card-body">
                            <h6 class="card-title text-success">1000 DA</h6>
                            <p class="card-text">Paper Puzzle Toy Educational Developmental Baby Kids.</p>
                         </div>
                      </div>
                   </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 </div>
                 </div>
              </div>
            </div>

          </div>
       </div><br>

       <div class="col-sm-10 col-md-6">
      <select name="_categorie" class="form-control">
        <option selected>Catégorie de Produits</option>
        <option value="12">Voitures & Motos</option>
        <option value="1">Informatique</option>
        <option value="2">Livers</option>
        <option value="3">Maison & jardin</option>
        <option value="4">Jeux & console</option>
        <option value="5">Mode & Homme</option>
        <option value="6">Mode & Femme</option>
        <option value="7">Sport</option>
        <option value="8">Téléphones & Tablettes</option>
        <option value="9">Electroménager & Television </option>
        <option value="10">Baby & kids</option>
        <option value="11">Alimentation</option>
      </select>
       </div></br>

  <!--    <div class="col-sm-10 col-md-6">
      <select name="_marque" class="form-control">
        <option selected >Marque de Produit</option>
        <option>---------- Téléphone ----------</option>
        <option value="1">Samsung</option>
        <option value="2">Sony</option>
        <option value="3">Condor</option>
        <option value="4">Apple</option>
        <option value="5">LG</option>
        <option value="6">oppo</option>
        <option>---------- game & console ----------</option>
        <option value="7">Xbox</option>
        <option value="8">playtation</option>
        <option value="9">Nintendo</option>
        <option>---------- Vetement ----------</option>
        <option value="10">Nike</option>
        <option value="11">Jordan</option>
        <option value="12">Lacoste</option>
        <option value="13">adidas</option>
        <option>---------------------------</option>
        <option value="14">Autre Marque</option>
      </select>
    </div></br> -->

      <div class="form-group form-group-lg">
         <label class="col-sm-2 control-label">Téléphone</label>
         <div class="col-sm-10 col-md-6">
           <div class="input-group">
         <input name="_telephone" type="text" class="form-control" id=""  autocomplete="tel-local" placeholder="numéro du téléphone" required>
         <div class="input-group-append">
               <span class="input-group-text"><i class="fa fa-phone"> </i> </span>
         </div>
           </div>
        </div>
       </div>

       <div class="col-sm-10 col-md-6">
      <select name="_willaya" class="form-control">
        <option selected >--Willaya--</option>
        <option value="1">ADRAR - 01</option>
        <option value="2">CHLEF - 02</option>
        <option value="3">LAGHOUAT - 03</option>
        <option value="4">OUM-EL-BOUAGHI - 04</option>
        <option value="5">BATNA - 05</option>
        <option value="6">BEJAIA - 06</option>
        <option value="7">BISKRA - 07</option>
        <option value="8">BECHAR - 08</option>
        <option value="9">BLIDA - 09</option>
        <option value="10">BOUIRA - 10</option>
        <option value="11">TAMANRASSET - 11</option>
        <option value="12">TEBESSA - 12</option>
        <option value="13">TLEMCEN - 13</option>
        <option value="14">TIARET - 14</option>
        <option value="15">TIZI-OUZOU - 15</option>
        <option value="16">ALGER - 16</option>
        <option value="17">DJELFA - 17</option>
        <option value="18">JIJEL - 18</option>
        <option value="19">SETIF - 19</option>
        <option value="20">SAIDA - 20</option>
        <option value="21">SKIKDA - 21</option>
        <option value="22">SSIDI-BEL-ABBES - 22</option>
        <option value="23">ANNABA - 23</option>
        <option value="24">GUELMA - 24</option>
        <option value="25">CONSTANTINE - 25</option>
        <option value="26">MEDEA - 26</option>
        <option value="27">MOSTAGANEM - 27</option>
        <option value="28">M-SILA - 28</option>
        <option value="29">MASCARA - 29</option>
        <option value="30">OUARGLA - 30</option>
        <option value="31">ORAN - 31</option>
        <option value="32">L-BAYADH - 32</option>
        <option value="33">ILLIZI - 33</option>
        <option value="34">BORDJ-BOU-ARRERIDJ - 34</option>
        <option value="35">BOUMERDES - 35</option>
        <option value="36">EL-TARF - 36</option>
        <option value="37">TINDOUF - 37</option>
        <option value="38">TISSEMSILT - 38</option>
        <option value="39">EL-OUED - 39</option>
        <option value="40">KHENCHELA -  40</option>
        <option value="41">SOUK-AHRAS - 41</option>
        <option value="42">TIPAZA - 42</option>
        <option value="43">MILA - 43</option>
        <option value="44">AIN-DEFLA -  44</option>
        <option value="45">NAAMA - 45</option>
        <option value="46">AIN-TEMOUCHENT - 46</option>
        <option value="47">GHARDAIA - 47</option>
        <option value="48">GHELIZANE - 48</option>

      </select>
        </div></br>
       <button type="submit" class="btn btn-primary" name="commit" style="margin-left: 220px;">Terminer</button>
    </form>
 </div>

<?php include('include/footer.php'); ?>
