<?php 

// TEST DE CONNEXION A LA BASE DE DONNEE
try {
    $sql = new PDO("mysql:host=localhost;dbname=martinExo2;charset=utf8;", "pi", "raspberry");

} catch(Exception $e) {
    echo "Erreur lors de la connexion à la base de donnée";
}

// code source de la page 
highlight_file(__FILE__);
echo '<a href="."><button>Retour en arrière</button></a>';

