<?php
   include('include/header.php');
   include('menu_categorie.php');
?>
<?php
  $reponse=$dbd->prepare('SELECT *
    FROM produit
    WHERE categorie =?
    ORDER BY id_produit DESC
    LIMIT 0 , 20
    ');
  $reponse->execute(array($_GET['cat']));
?>

<br><br><br><br><br><br>
<div class="container mb-4">
    <div class="row">
      <div class="col-12">
        <div class="" style="float:right">
          <a href="#"><i style='font-size:24px' class='fas'>&#xf009;</i></a>
          <a href="list.php"><i style='font-size:24px' class='fas'>&#xf00b;</i></a>
        </div>
      </div>
    </div><br>

   <div class="row">
     <?php
        while($donnes=$reponse->fetch()){
          $date=strtotime($donnes['date']);
          ?>
                 <div class="col-lg-3  col-md-6 mb-3">
                     <div class="card" style="height:18rem;">
                       <div class="inner">
                         <a href="iteminfo.php?billet=<?php echo htmlspecialchars($donnes['id_produit']);?>" target="_blank" style="dicoration :none">
                           <img class="card-img-top" src="imagesProd/<?php echo htmlspecialchars($donnes['image']);?>"style="height:150px" />
                         </a>
                       </div>
                      <div class="card-body">
                        <h6 class="text-success"><?php echo htmlspecialchars($donnes['prix']); ?> DA</h6>
                        <p class="card-text"><?php echo htmlspecialchars($donnes['description']); ?></p>
                        <small class="text-muted" style="float:right"> <?php echo htmlspecialchars(date('F j',$date)) ; ?></small>
                        <small class="text-muted" >Habbidou.com</small>
                        <!-- <a class="card-link" href="#">About Me</a>  htanrigalha -->
                      </div>
                    </div>
                  </div>

      <?php }
          $reponse->closeCursor();
              ?>

   </div><!-- row -->
 </div><!-- container -->

<?php include('include/footer.php'); ?>
