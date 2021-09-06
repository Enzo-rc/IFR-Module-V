<?php
session_start();

echo $_POST['identite']; ?>

vérifie la condition
<?php
    $data = $_POST['identite'];
if ($data == "alien")
    { 
        $_SESSION ['utilisateur'] = "alien";
        header('Location: index.php?page=exercice1');
    }
else
    {echo "Désolé<br>";} 
?>

