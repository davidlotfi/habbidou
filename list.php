<?php
  require_once("include/pagination.php");
  include('include/header.php');
  include('menu_categorie.php');
  //$reponse=$dbd->query('select * from produit,brands WHERE produit.marque = brands.id ORDER BY id_produit DESC');
 ?>
 <?php

        // Pagination
        //1. the current page number ($current_page)
          $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
        //2. Produit per page ($per_page)
          $per_page = 12;
        //3. total count Produit ($total_count)
          $total_count = count_all_produit_for_list();
        //4. Object of pagination
          $pagination = new Pagination($page,$per_page,$total_count);

          $per_page=addslashes($per_page);
          $offset=$pagination->offset();
          $offset=addslashes($offset);

          $sql  = "SELECT * FROM produit";
          $sql .= " ORDER BY id_produit DESC";
          $sql .= " LIMIT {$per_page}";
          $sql .= " OFFSET {$offset}";

          $reponse = find_by_sql($sql);

  ?>

    <br><br><br><br>
     <div class="container col-lg-8 mb-4">
       <?php
         while($donnes=$reponse->fetch()){

           $datelist= strtotime($donnes['date']);
             ?>
       <ul class="ullist">
         <li class="lilist">
           <img class="float-left imaglist" src="imagesProd/<?php if(empty($donnes['image'])){
                                       echo'image.png';}echo htmlspecialchars($donnes['image']);?>"style="height:150px" />
           <div class="info">
             <h6 class="card-title text-primary"><?php echo htmlspecialchars('habbidou.com'); ?></h6>
           </div>
           <figcaption><?php echo htmlspecialchars($donnes['description']); ?></figcaption>
           <h6 class="text-success"><?php echo htmlspecialchars($donnes['prix']); ?>  DA</h6>
           <small class="text-muted"><?php echo htmlspecialchars(date('Y-m-d à H:i',$datelist)); ?> </small>
            <a href="iteminfo.php?billet=<?php echo htmlspecialchars($donnes['id_produit']);?>" class="btn btn-primary btlist" target="_blank">Détails</a>
         </li>
       </ul>
         <?php }
             $reponse->closeCursor();
          ?>
     </div>

     <nav aria-label="...">
             <ul class="pagination justify-content-center">
                <?php if($pagination->has_previous_page()){?>
                 <li class="page-item">
                     <a class="page-link" href="<?php echo 'list.php?page='.$pagination->previous_page(); ?>" tabindex="-1">Previous</a>
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
                         <li class="page-item"><a class="page-link" href="<?php echo 'list.php?page='.$i; ?>"><?php echo $i; ?></a></li>
                     <?php } ?>
                    <?php }?>

               <?php if($pagination->has_next_page()){ ?>
                   <li class="page-item">
                        <a class="page-link" href="<?php echo 'list.php?page='.$pagination->next_page(); ?>">Next</a>
                   </li>
               <?php }else{ ?>
                   <li class="page-item disabled">
                        <a class="page-link" href="#">Next</a>
                   </li>
             <?php } ?>
             </ul>
        </nav>

  <?php include('include/footer.php'); ?>
