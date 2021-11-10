<div class="row">

    <?php
       while($donnes=$bebe->fetch()){
          $date= strtotime($donnes['date']) ;
     ?>
             <div class="col-lg-3  col-md-6 mb-3">

                 <div class="card cdd" style="height:18rem;">
                    <div class="inner">
                        <a href="iteminfo.php?billet=<?php echo htmlspecialchars($donnes['id_produit']);?>" target="_blank" style="dicoration :none">
                           <img class="card-img-top opc" src="imagesProd/<?php if(empty($donnes['image'])){echo'image.png';}echo htmlspecialchars($donnes['image']);?>"style="height:150px" />
                        </a>
                    </div>

                    <div class="card-body">
                        <h6 class="text-success"><?php echo htmlspecialchars($donnes['prix']); ?> DA <i class="text-primary fa fa-check-square"style="float:right"></i></h6>
                        <p class="card-text git-text"><?php echo htmlspecialchars($donnes['description']); ?></p>
                        <small class="text-muted" style="float:right"><?php echo htmlspecialchars(date('F j',$date)); ?></small>
                        <small class="text-muted">Habbidou.com</small>
                        <!-- <a class="card-link" href="#">About Me</a>  htanrigalha -->
                    </div>
                 </div>

              </div>

    <?php } ?>

</div><!-- row -->
