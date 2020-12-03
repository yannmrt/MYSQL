<?php 

try {
    $sql = new PDO("mysql:host=localhost;dbname=martinExoExemple;charset=utf8;", "pi", "raspberry");

} catch(Exception $e) {
    echo "Erreur lors de la connexion à la base de donnée";
}

if(isset($_POST['submit'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $password = htmlspecialchars($_POST['password']);

    if(!empty($nom) AND !empty($password)) {
        $reqUser = $sql->prepare("SELECT * FROM user WHERE nom = ? AND password = ?");
        $reqUser->execute(array($nom,$password));
        $countUser = $reqUser->rowCount();

        if($countUser >= 1) {
            while($_USER = $reqUser->fetch()) {
                echo "Bonjour, " . $_USER['prenom']; 

            }
        }
    }
}

?>

<form action="" method="post">
        Nom<input type="text" name="nom">
        Pass<input type="text" name="password">
        <input type="submit" value="submit" name="submit">
</form>

<?php
// code source de la page 
highlight_file(__FILE__);
?> 
<?php echo '<a href="."><button>Retour en arrière</button></a>'; ?>
