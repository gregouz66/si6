<?php
if(isset($_POST['ajout'])) {
$errors = array();

//Sécurité injection
$prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES);
$prenom = htmlentities($prenom, ENT_QUOTES);
$nom = htmlspecialchars($_POST['nom'], ENT_QUOTES);
$nom = htmlentities($nom, ENT_QUOTES);
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
//convertir maj en min
$prenom = strtolower($prenom);
$nom = strtolower($nom);
//Définit grade
$grade = $_POST['grade'];

if (empty($prenom) === true || empty($nom) === true || empty($email) === true || empty($grade) === true) {
    $errors[] = 'Tout les champs sont obligatoire !';
} else {
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $errors[] = 'L\'email n\'est pas valide !';
    }
    if (ctype_alpha($prenom) === false || ctype_alpha($nom) === false) {
        $errors[] = 'Le prénom et nom doivent contenir seulement des lettres et doivent être composés en un seul mot chacun !';
    }
}

if (empty($errors) === true) {
//Définit le pseudo
$plettre = $prenom[0];
$pseudo = $plettre . "." . $nom;

//Définit mdp hasard en 5chiffres
$mdpclair = rand(10000, 99999);
$mdp = sha1($mdpclair);


//Envoi la requête
$req = $bdd->prepare('INSERT INTO utilisateurs(pseudo, prenom_utilisateur, nom_utilisateur, mot_de_passe, adresse_email, administrateur) VALUES(:pseudo, :prenom, :nom, :mdp, :email, :admin)');
$req->execute(array(
  	'pseudo' => $pseudo,
  	'prenom' => $prenom,
  	'nom' => $nom,
  	'mdp' => $mdp,
  	'email' => $email,
  	'admin' => $grade
));
$errors1[] = 'Utilisateur ajouté !';
}
}
?>
