<?php
  
 $host = "localhost";
 $dbname = "gestionuniversite";
 $usernam = "root";
 $passwor = "";
  try{
    //creation de la connexion PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$usernam,$passwor);
    //Configurer les exceptions en cas d'erreur
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //Retourne les resultats sous forme de tableaux associatifs
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    echo "Connexion a la base de donnee reussie";
    //Vous pouvez executer les requetes sql
  } catch (PDOException $e){
     //En cas d'erreur de connexion
     die ("Erreur".$e->getMessage());
  }
?>
 
