<?php

      require_once("include/pagination.php");
      include('include/header.php');
      include('menu_categorie.php');
      // include('slider.php');
      //cars
      $cars_sql = "SELECT * FROM produit WHERE categorie = 12 ORDER BY id_produit DESC LIMIT 0 , 4";
      $cars = find_by_sql($cars_sql);
      //phones and tablette
      $phones_sql = "SELECT * FROM produit WHERE categorie = 8 ORDER BY id_produit DESC LIMIT 0 , 4";
      $phones = find_by_sql($phones_sql);
      //informatique
      $informatique_sql = "SELECT * FROM produit WHERE categorie = 1 ORDER BY id_produit DESC LIMIT 0 , 4";
      $informatique = find_by_sql($informatique_sql);
      //gamesconsole
      $games_sql = "SELECT * FROM produit WHERE categorie = 4 ORDER BY id_produit DESC LIMIT 0 , 4";
      $games = find_by_sql($games_sql);
      //maisonjardin
      $maisonJardin_sql = "SELECT * FROM produit WHERE categorie = 3 ORDER BY id_produit DESC LIMIT 0 , 4";
      $maisonJardin = find_by_sql($maisonJardin_sql);
      //food
      $alimentation_sql = "SELECT * FROM produit WHERE categorie = 11 ORDER BY id_produit DESC LIMIT 0 , 4";
      $alimentation = find_by_sql($alimentation_sql);
      //liver
      $liver_sql = "SELECT * FROM produit WHERE categorie = 2 ORDER BY id_produit DESC LIMIT 0 , 4";
      $liver = find_by_sql($liver_sql);
      //kids
      $bebe_sql = "SELECT * FROM produit WHERE categorie = 10 ORDER BY id_produit DESC LIMIT 0 , 4";
      $bebe = find_by_sql($bebe_sql);
      //sports
      $sport_sql = "SELECT * FROM produit WHERE categorie = 7 ORDER BY id_produit DESC LIMIT 0 , 4";
      $sport = find_by_sql($sport_sql);

?>


  <?php
     // Pagination
     //1. the current page number ($current_page)
       $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
    //2. produit per page ($per_page)
       $per_page = 20;
    //3. total count Produit ($total_count)
       $total_count = count_all_produit();
    //4. Object of pagination
       $pagination = new Pagination($page,$per_page,$total_count);

   // ajouter les addslashes pour injection sql
       $per_page=addslashes($per_page);
       $offset=$pagination->offset();
       $offset=addslashes($offset);

       $sql  = "SELECT * FROM produit";
       $sql .= " ORDER BY id_produit ";
       $sql .= " LIMIT {$per_page}";
       $sql .= " OFFSET {$offset}";

       $reponse = find_by_sql($sql);

   ?>

   <br><br><br>
      <!-- start voiture -->
      <div class="container">
        <div class="row text-right">
            <div class="col-lg-12">
                <a href="ajouteProd.php" class="btn btn-outline-primary" style="font-weight: 600;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg> بيع على حبيدو </a>
                <a href="list.php" class="btn btn-outline-warning" style="font-weight: 600;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                </svg> عرض الكل </a>
            </div>
        </div><br>
        <?php include('include/front/voiture.php'); ?>
      </div>
      <!-- end voiture -->
      <!-- start informatique -->
      <div class="container">
        <?php include('include/front/informatique.php'); ?>
      </div>
      <!-- end informatique -->
      <!-- start phones -->
      <div class="container">
        <?php include('include/front/phones.php'); ?>
      </div>
      <!-- end phones -->
      <!-- start games -->
      <div class="container">
        <?php include('include/front/games.php'); ?>
      </div>
      <!-- end games -->
      <!-- start sport -->
      <div class="container">
        <?php include('include/front/sport.php'); ?>
      </div>
      <!-- end sport -->
      <!-- start alimentation -->
      <div class="container">
        <?php include('include/front/alimentation.php'); ?>
      </div>
      <!-- end alimentation -->
      <!-- start liver -->
      <div class="container">
        <?php include('include/front/liver.php'); ?>
      </div>
      <!-- end liver -->
      <!-- start bebe -->
      <div class="container">
        <?php include('include/front/bebe.php'); ?>
      </div>
      <!-- end bebe -->

   <div class="container mb-4">
    <h4 class="text-primary text-right"> منتوجات اخرى</h4>
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

  <!-- start pagination -->
   <?php // include('include/front/paginationFront.php'); ?>
  <!-- end pagination -->

 <?php include('include/footer.php'); ?>
