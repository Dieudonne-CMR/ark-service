<?php 
session_start();
//65707eb0c3041 //6561d3dd3bbf7 65c3e2b8e0756 / 662f2c0f2234e / 

//--------- lien des images de Service 
$img_service ="https://akila.blog/img_service/";
//--------- lien des images des articles 
$url_image ="https://akila.blog/@ressouce/mg_etablissement/"; 
//---------lien du logo de l'entreprise
$lien_logo ="https://akila.blog/logo_site/"; 
//---------lien pour les bannieres de l'entreprise
$image_banniere ="https://akila.blog/image_baniere/";
//------- partenaire
$logo_partenaire = "https://akila.blog/@ressouce/logo_site/";   // lien des logos des partenaire 
//---------- page offre
$Lien_image_offres="https://akila.blog/img_page/";   // lien des logos des partenaire

// include "bd/query.php" ;
// $matricule_entreprise = "662f2c0f2234"; 

$matricule_entreprise="654b7262c7d05"; // matricule de l'entreprise
// include("fonctions/fonctions.php"); // les fonctions de l'application
include('api/fonctions.php'); // les fonctions de l'application
include('api/api_article.php'); // les fonctions de l'api des articles
include('api/api_categorie.php'); // les fonctions de l'api des categories
include('api/api_info_admin.php'); // les fonctions de l'api des admins 
include('api/api_services.php'); // les fonctions de l'api des services
