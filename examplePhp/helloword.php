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
$sexe = "M";
if ($sexe == "M")// si sexe = M pour Male
{
    echo "Homme   <br>";
}
else //sinon
{
    echo "Femme <br>";
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
$heure = "22";
if($heure >= "00" AND $heure < "13"){
    echo "Bonjour !";
    }elseif($heure >= "13" AND $heure < "18"){
    echo "Bonne après-midi !";
    }else{
    echo "Bonsoir !";}


echo "<br><br>Exercice 8 <br>";
    for ( $i = 0; $i <= 10; $i++){
    echo $i*5 . '<br />';}


echo "<br><br>Exercice 9 <br>";
$aug = 0;
    while ($aug  <= 20) {

        $aug = $aug + 2;
        if ($aug == 10) {
            echo '<strong>'.$aug.'</strong><br>';
        }else {
            echo $aug.'<br>';
        }
    }
 


echo "<br><br>Exercice 10 <br>";
$array = array ('FRANCE => Paris', 'ALLEMAGNE => Berlin', 'ITALIE => Rome',);
foreach( $array as $value ) // on parcourt $array, la valeur de l'item courant est copiée dans $value
  echo $value . '<br />'; // affichage


  echo "<br><br>Exercice 10 <br>";
$init = 0;
while($init < 10){
    $var = rand(0,100);
    $tabNbrRand[] = $var;
    $init++;
}
print_r($tabNbrRand);
foreach($tabNbrRand as $nombre){
    if ($nombre < 50) {
        $tabInf50[] = $nombre;
    }
    if ($nombre >=50) {
        $tabSup50[] = $nombre;
    }
}
echo '<br><br>Tableau inférieur à 50 <br>';
print_r($tabInf50);
echo '<br><br>Tableau supérieur à 50 <br>';
print_r($tabSup50);


echo "<br><br>Exercice 11 <br>";
$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
    );




?>