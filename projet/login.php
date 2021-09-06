<?php
if (isset($_POST['identite'])) {
   /*echo $_POST['identite'];*/
    $data = $_POST['identite'];
    if ($data == "alien") {
        $_SESSION['utilisateur'] = "alien";

        header('Location: index.php?page=exercice1');
    } else {
        echo '<h4 class="error">Origine incorrecte !</h4><br>';
    }
}
?>

<form action="index.php" method="post">
    <h3>Veuillez vous identifier.</h3>
    <label for="identite">
      <h4>Quelle est votre civilité ?</h4>
    </label>
      <select name="identite" id="identite">
        <option value="null">Choisir</option>
        <option value="M.">M.</option>
        <option value="Mme">Mme</option>
        <option value="alien">alien</option>
      </select>
    <button class="button buttonlogin">Vérifier</button>
</form>
