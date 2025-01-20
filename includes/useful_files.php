<?php 

    
    //  include('api-akila-blog/api.php'); 
    include('@ressources/connexion_bdd.php');
    
   $id ='WB5616451578' ;
    $recup = $bdd -> prepare("SELECT * FROM core2 WHERE id_website = ? "); 
            
            $recup -> execute(array($id));
            $data=$recup -> fetchAll();

        foreach ($data as $data2) {
            ?>
        
        <?php
        }

// chemin d'acces en local 
    $chemin_acces = '../manjaro/platform/assets/images/upload_images';
    $sending_form_reservation = '../manjaro/platform/processings/add_reservation.php';
    $form_newsletter = '../manjaro/platform/processings/newsletter.php';
    $form_reviews = '../manjaro/platform/processings/write.reviews.php';
    $form_join_us = '../manjaro/platform/processings/form_join_us.php';
    $lien_form_contact = '../manjaro/platform/processings/form_contact.php';


    //chemin d'acces en ligne 
    // $chemin_acces = 'https://1pub.net/_apps/manjaro/platform/assets/images/upload_images'; 
    // $sending_form_reservation = 'https://1pub.net/_apps/manjaro/platform/processings/add_reservation.php';
    // $form_newsletter = 'https://1pub.net/_apps/manjaro/platform/processings/newsletter.php';
    // $form_reviews = 'https://1pub.net/_apps/manjaro/platform/processings/write.reviews.php';
    // $form_join_us = 'https://1pub.net/_apps/manjaro/platform/processings/form_join_us.php';
    // $lien_form_contact = 'https://1pub.net/_apps/manjaro/platform/processings/form_contact.php';
    
?>