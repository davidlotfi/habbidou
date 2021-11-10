
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
