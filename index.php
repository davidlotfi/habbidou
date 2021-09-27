
 <?php

      require_once("include/pagination.php");
      include('include/header.php');
      include('menu_categorie.php');
    // include('slider.php');
    //$reponse=$dbd->query('select * from produit ORDER BY id_produit DESC LIMIT 0 , 60');
  ?>

  <?php
     // Pagination
     //1. the current page number ($current_page)
       $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
    //2. Produit per page ($per_page)
       $per_page = 12 ;
    //3. total count Produit ($total_count)
       $total_count = count_all_produit();
    //4. Object of pagination
       $pagination = new Pagination($page,$per_page,$total_count);

   // ajouter les addslashes pour injection sql
       $per_page=addslashes($per_page);
       $offset=$pagination->offset();
       $offset=addslashes($offset);

       $sql  = "SELECT * FROM produit";
       $sql .= " ORDER BY id_produit DESC";
       $sql .= " LIMIT {$per_page}";
       $sql .= " OFFSET {$offset}";

       $reponse = find_by_sql($sql);

   ?>



   <br><br><br>

   <div class="container mb-4">

      <div class="row">

          <?php
             while($donnes=$reponse->fetch()){
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

          <?php } $reponse->closeCursor();  ?>

      </div><!-- row -->

   </div><!-- container -->

  <nav aria-label="...">
         <ul class="pagination justify-content-center">
            <?php if($pagination->has_previous_page()){?>
             <li class="page-item">
                 <a class="page-link" href="<?php echo 'index.php?page='.$pagination->previous_page(); ?>" tabindex="-1">Previous</a>
             </li>
           <?php }else{ ?>
             <li class="page-item disabled">
                 <a class="page-link" href="#" tabindex="-1">Previous</a>
             </li>
           <?php } ?>

               <?php for($i=1; $i <= $pagination->total_pages(); $i++){ ?>
                 <?php if($i == $page){?>
                  <li class="page-item active">
                      <a class="page-link" href="#"><?php echo $i; ?><span class="sr-only">(current)</span></a>
                   </li>
                 <?php }else{ ?>
                     <li class="page-item"><a class="page-link" href="<?php echo 'index.php?page='.$i; ?>"><?php echo $i; ?></a></li>
                 <?php } ?>
                <?php }?>

           <?php if($pagination->has_next_page()){ ?>
               <li class="page-item">
                    <a class="page-link" href="<?php echo 'index.php?page='.$pagination->next_page(); ?>">Next</a>
               </li>
           <?php }else{ ?>
               <li class="page-item disabled">
                    <a class="page-link" href="#">Next</a>
               </li>
         <?php } ?>
         </ul>
    </nav>

 <?php include('include/footer.php'); ?>
