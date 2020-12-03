<?php 

try {
    $sql = new PDO("mysql:host=localhost;dbname=martinExo2;charset=utf8;", "pi", "raspberry");

    $reqPatient = $sql->query("SELECT * FROM patient");
    
    while($patient = $reqPatient->fetch()) {
        echo $patient["idSS"] . " " . $patient['nom'] . " " . $patient['prenom'];
    }

} catch(Exception $e) {
    echo "Erreur lors de la connexion à la base de donnée";
}


// code source de la page 
highlight_file(__FILE__);
echo '<a href="."><button>Retour en arrière</button></a>';
