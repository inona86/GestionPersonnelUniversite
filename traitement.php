<?php
    include "connecte.php";
   if(isset($_POST['submit'])){

  //recuperation des donnees
    $username = $_POST["nom"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $error = array();
  //validation 

  if(!empty($username)|| !empty($email)|| !empty($password)) {
    $error[] = "tous les champs sont obligatoires";
  }
  echo "<h1> Donnee recues </h1>";
  echo "<p> Votre nom est : $username </p>";
  echo "<p> Email: $email </p>";
  echo "<p> Mot de passe: $password </p>";

  //Preparation de la requete d'insertion

  $sql =( "INSERT INTO employe(nom,email,matricule) VALUES (?,?,?)");
  $premier = $conn->prepare($sql);
  if($premier === false){
    echo "erro preparation";
  }

  //Execution de la requete
  $premier->execute([$username,$email,$password]);
  // Fermeture
  $reponse = $premier->fetchALL(PDO::FETCH_ASSOC);
  header("Location: form.html");
} 

    ?>
  
