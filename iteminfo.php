<?php
  //include('include/Connexion.php');
  include('include/header.php');
  include('menu_categorie.php');
$reponse=$dbd->prepare('SELECT id_produit,marque,description,detail,prix,image,image2,image3,image4,telephone,date,nom_willaya,nom FROM produit,willaya,brands  WHERE produit.willaya=willaya.ID_willaya AND produit.marque=brands.id AND id_produit=?');
$reponse->execute(array($_GET['billet']));
$donnes=$reponse->fetch() ;
$dateItem= strtotime($donnes['date']);

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/easyzoom.css" />
  <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css">

  <title>Bootstrap</title>
</head>
<body>

  <style>
     .k img{
       width: 100px;
       height: 100px;
     }
     #image-gallery .modal-footer{
     display: block;
   }
   .mim img{
     max-width: 500px;
     height: 400px;

   }
   .modal-body {
    text-align: -webkit-center;
  }
  .list-group-item:hover{

     color: #337ab7;
     text-shadow:  0 0 1em #337ab7;
     cursor: pointer;
   }
   .list-group{
     margin-top: 10px;
     position: fixed;
   }

  </style>



<br><br><br>
    <div class="row m-3">
       <section class="col-sm-8">
         <div class="card mb-3" style="width: 100%;">
           <div class="row no-gutters">
                <div class="col-md-5">

                  <div class="easyzoom easyzoom--adjacent">
                  	<a href="imagesProd/<?php echo $donnes['image'];?>">
                    <img class="card-img-top" src="imagesProd/<?php echo htmlspecialchars($donnes['image']);?>"style="height:300px" />
                    </a>
                  </div>

                 </div>
                <div class="col-md-7">
                 <div class="card-body">
                  <h6 class="card-title text-primary">À propos de ce produit</h6>
                  <p class="card-text"><?php  echo htmlspecialchars($donnes['description']); ?><br><?php  echo htmlspecialchars($donnes['detail']); ?></p>
                  <h5 class="text-success"><?php  echo htmlspecialchars($donnes['prix']);?> DA</h5>
                  <p class="card-text"><small class="text-muted">Last updated <?php echo htmlspecialchars(date('Y-m-d à H:i',$dateItem)); ?></small></p>
                </div>
              </div>
            </div>
          </div>
       </section>
       <section class="col-sm-3 ml-4">
         <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header"><i style="font-size:20px" class="fa">&#xf2b5; </i>&nbsp; Cantacter le vandeur</div>
              <div class="card-body">
                <h5 class="card-title"><i class="fa fa-phone" style="font-size:20px"> </i> <?php echo htmlspecialchars($donnes['telephone']); ?></h5>
                <h5><i class="fa fa-map-marker-alt" style="font-size:20px"></i> <?php echo htmlspecialchars($donnes['nom_willaya']); ?></h5>
                <p class="card-text">Cantacter le vandeur pour obtenir des informations plus précises sur les prix et la disponibilité.</p>
                <i class="fa fa-truck" style="font-size:20px;  margin-left:05px; float:right"></i>
             </div>
           </div>
      </section>

     </div>


      <section class="col-sm-4 ">

	    <div class="row no-gutters mb-3 k">

		  <div class="col-2 col-sm-3" >
        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-image="imagesProd/<?php echo htmlspecialchars($donnes['image']);?>"   data-target="#image-gallery">
		  <img class="img-thumbnail" src="imagesProd/<?php echo htmlspecialchars($donnes['image']);?>" alt="sample image">
        </a>
		  </div>

		  <div class="col-2 col-sm-3" >
        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-image="imagesProd/<?php if(empty($donnes['image2'])){echo "image.png";}else{ echo htmlspecialchars($donnes['image2']);} ?>"   data-target="#image-gallery">
		  <img class="img-thumbnail" src="imagesProd/<?php if(empty($donnes['image2'])){echo "image.png";}else{ echo htmlspecialchars($donnes['image2']);} ?> " alt="sample image">

        </a>
		  </div>

		  <div class="col-2 col-sm-3" >
        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-image="imagesProd/<?php if(empty($donnes['image3'])){echo "image.png";}else{ echo htmlspecialchars($donnes['image3']);} ?>"   data-target="#image-gallery">
		  <img class="img-thumbnail" src="imagesProd/<?php if(empty($donnes['image3'])){echo "image.png";}else{ echo htmlspecialchars($donnes['image3']);} ?>" alt="sample image">
        </a>
		  </div>

		  <div class="col-2 col-sm-3" >
        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-image="imagesProd/<?php if(empty($donnes['image4'])){echo "image.png";}else{ echo htmlspecialchars($donnes['image4']);} ?>"   data-target="#image-gallery">
		  <img class="img-thumbnail" src="imagesProd/<?php if(empty($donnes['image4'])){echo "image.png";}else{ echo htmlspecialchars($donnes['image4']);} ?>" alt="sample image">
        </a>
		  </div>


		</div><!-- row -->
      </section><!-- section -->

      <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-lg">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h4 class="modal-title text-success" id="image-gallery-title">Habiba.com</h4>
                         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                         </button>
                     </div>
                     <div class="modal-body mim">
                         <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                         </button>
                         <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                         </button>
                     </div>
                 </div>
             </div>
         </div>

      <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>-->
      <script src="js/jquery3.min.js"></script>
      <script src="js/easyzoom.js"></script>
      <script>
        // Instantiate EasyZoom instances
        var $easyzoom = $('.easyzoom').easyZoom();
        // Setup thumbnails example
        var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');
      </script>

<script src="js/modal.js"></script>

<?php include('include/footer.php'); ?>
