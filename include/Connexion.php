<?php

 try{

        $dbd=new PDO('mysql:host=localhost;dbname=ecomabdellatif','root','');

     }catch(Exception $e){

        die($e->getmessage());

    }

    function find_all_produit(){
        global $dbd;
        return $dbd->query('SELECT * FROM produit');
    }
    // for list qui contient brands
    function find_all_produit_for_list(){
        global $dbd;
        return $dbd->query('SELECT * FROM produit,brands WHERE produit.marque = brands.id');
    }

    function count_all_produit(){
        $reponse = find_all_produit();
        return $reponse->rowCount();
    }
    // for list produit list< produit index
    function count_all_produit_for_list(){
        $reponse = find_all_produit_for_list();
        return $reponse->rowCount();
    }

    function find_by_sql($sql=""){
        global $dbd;
        return $dbd->query($sql);
  }

?>
