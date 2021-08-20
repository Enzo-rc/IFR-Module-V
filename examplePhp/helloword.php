<h1>Hello word!<h1>

<?php
echo " <h2>Exercices PHP<h2><br>";
    
echo "<h3>Exercice 1<h3>";
    // (note1 + note2 + note3) / nbre de notes
$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;
$moyenne = ($note_maths + $note_francais + $note_histoire_geo)/3;
echo 'La moyenne est de '.$moyenne.' / 20.';


echo "<br><br>Exercice 2 <br>";
$prix_ht = 50;
$tva = 20;
//(prixHT * tauxTVA/100) + prix HT
//prixHT * (1 + TVA / 100)
$prix_ttc = $prix_ht * (1+$tva/100);
echo 'Le prix TTC du produit est de
'.$prix_ttc.' €.';


echo "<br><br>Exercice 3 <br>";
$test = "42";
var_dump($test);

echo "<br><br>Exercice 4 <br>";
$sexe = "18";
if ($sexe < "18")// si l'age est inférieur à 18 ans
{
    echo "Revenez dans quelques années <br>";
}
else //sinon
{
    echo "Bienvenue <br>";
}


echo "<br><br>Exercice 5 <br>";
$budget = "1 553.89 €";
$achats = "1 554.76 €";
if ($achats < $budget)// si les achats sont inférieurs au budget
{
    echo "ok, vous pouvez acheter <br>";
}
else //sinon
{
    echo "Renflouez la caisse <br>";
}


echo "<br><br>Exercice 6 <br>";
$sexe = "18";
if ($sexe < "18")// si l'age est inférieur à 18 ans
{
    echo "Vous êtes mineur, désolé <br>";
}
else //sinon
{
    echo "Bienvenue, vous êtes majeur <br>";
}


echo "<br><br>Exercice 7 <br>";
$heure = "18";
if ($heure < "18")// si l'age est inférieur à 18 ans
{
    echo "Vous êtes mineur, désolé <br>";
}
else //sinon
{
    echo "Bienvenue, vous êtes majeur <br>";
}





?>