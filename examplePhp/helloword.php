<link rel="stylesheet" href="style.css">

<h1><strong>Hello word!</strong><h1>

<?php
echo " <h2><strong>Exercices PHP</strong></h2><br><br>";


echo "<br><strong>Exercice 1</strong><br>";
//Modifier le code ci-dessous pour calculer la moyenne des notes.
    $note_maths = 15;
    $note_francais = 12;
    $note_histoire_geo = 9;
    $moyenne = ($note_maths + $note_francais + $note_histoire_geo)/3;
        echo 'La moyenne est de '.$moyenne.'/20.<br><br>';
    // (note1 + note2 + note3) / nbre de notes


echo "<br><br><strong>Exercice 2</strong><br>";
//Calculer le prix TTC du produit.
    $prix_ht = 50;
    $tva = 20;
    //(prixHT * tauxTVA/100) + prix HT
    //prixHT * (1 + TVA / 100)
    $prix_ttc = $prix_ht * (1+$tva/100);
        echo 'Le prix TTC du produit est de '.$prix_ttc.' €.<br><br>';


echo "<br><br><strong>Exercice 3</strong><br>";
//Déclarer une variable $test qui contient la valeur 42. En utilisant la fonction var_dump(), faire en sorte que le type de la variable $test soit string et que la valeur soit bien de 42.
    $test = "42";
        var_dump($test);


echo "<br><br><br><strong>Exercice 4</strong><br>"; 
//Déclarer une variable $sexe qui contient une chaîne de caractères. Créer une condition qui affiche un message différent en fonction de la valeur de la variable.
    $sexe = "M";
        if ($sexe == "M")// si sexe = M pour Male
            {echo "Homme<br>";}
        else //sinon
            {echo "Femme<br><br>";}


echo "<br><br><strong>Exercice 5</strong><br>";
//Déclarer une variable $budget qui contient la somme de 1 553,89 €. Déclarer une variable $achats qui contient la somme de 1 554,76 €. Afficher si le budget permet de payer les achats.
    $budget = "1 553.89 €";
    $achats = "1 554.76 €";
        if ($achats < $budget)// si les achats sont inférieurs au budget
            {echo "ok, vous pouvez acheter <br>";}
        else //sinon
            {echo "Renflouez la caisse <br>";}


echo "<br><br><strong>Exercice 6</strong><br>";
//Déclarer une variable $age qui contient la valeur de type integer de votre choix. Réaliser une condition pour afficher si la personne est mineure ou majeure.
    $sexe = "18";
        if ($sexe < "18")// si l'age est inférieur à 18 ans
            {echo "Vous êtes mineur, désolé <br>";}
        else //sinon
            {echo "Bienvenue, vous êtes majeur<br>";}


echo "<br><br><strong>Exercice 7</strong><br>";
//Déclarer une variable $heure qui contient la valeur de type integer de votre choix comprise entre 0 et 24. Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit
    $heure = "22";
        if($heure >= "00" AND $heure < "13")
            {echo "Bonjour !<br>";}
        elseif($heure >= "13" AND $heure < "18")
            {echo "Bonne après-midi !<br>";}
        else
            {echo "Bonsoir !<br>";}


echo "<br><br><strong>Exercice 8</strong><br>";
//En utilisant la boucle for, afficher la table de multiplication du chiffre 5.
    for ( $i = 0; $i <= 10; $i++)
        {echo $i*5 . '<br>';}


echo "<br><br><strong>Exercice 9</strong><br>";
//Déclarer une variable avec le nom de votre choix et avec la valeur 0. Tant que cette variable n'atteint pas 20, il faut :
//● l'afficher ;
//● incrémenter sa valeur de 2 ;
//Si la valeur de la variable est égale à 10, la mettre en valeur avec la balise HTML appropriée.
    $aug = 0;
        while ($aug  <= 20)
            {$aug = $aug + 2;
                if ($aug == 10)
                    {echo '<strong>'.$aug.'</strong><br>';}
                else
                    {echo $aug.'<br>';}
            }
 

echo "<br><br><strong>Exercice 10</strong><br>";
//Déclarer une variable de type array qui stocke les informations suivantes :
//● France : Paris
//● Allemagne : Berlin
//● Italie : Rome
//Afficher les valeurs de tous les éléments du tableau en utilisant la boucle foreach
    $pays =array(
            'FRANCE' => 'Paris',
            'ALLEMAGNE' => 'Berlin',
            'ITALIE' => 'Rome',);
        foreach( $pays as $ville)
    // on parcourt $pays, la valeur de l'item courant est copiée dans $ville
            {echo $ville.'<br>';} // affichage
    

echo "<br><br><strong>Exercice 11</strong><br>";
//En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires.
//Puis, tester si le chiffre 42 est dans le tableau et afficher un message en conséquence.
//Enfin, afficher le contenu de votre tableau avec var_dump.
$init = 0;
while($init < 10)
    {$var = rand(0,43);
     $tabNbrRand[] = $var;
     $init++;
    }
foreach($tabNbrRand as $nombre)
    {if ($nombre == 42)
        {echo "<br>Nombre 42 est proposé <br>";}
     }
        print_r($tabNbrRand);



echo "<br><br><br><strong>Exercice 12</strong><br>";
//En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires.
//Puis, trier les valeurs dans deux tableaux distincts.
//Le premier contiendra les valeurs inférieures à 50 et le second contiendra les valeurs supérieures ou égales à 50.
//Enfin, afficher le contenu des deux tableaux.
$init = 0;
while($init < 10)
    {$var = rand(0,100);
     $tabNbrRand[] = $var;
     $init++;
    }
        print_r($tabNbrRand);
foreach($tabNbrRand as $nombre)
    {if ($nombre < 50)
        {$tabInf50[] = $nombre;}
if ($nombre >=50)
        {$tabSup50[] = $nombre;}
    }
        echo '<br>Tableau inférieur à 50 <br>';
            print_r($tabInf50);
        echo '<br>Tableau supérieur à 50 <br>';
            print_r($tabSup50);


echo "<br><br><br><strong>Exercice 13</strong><br>";
//En utilisant le tableau ci-dessous, compter le nombre d'éléments du tableau.
    $pays_population = array(
        'France' => 67595000,
        'Suede' => 9998000,
        'Suisse' => 8417000,
        'Kosovo' => 1820631,
        'Malte' => 434403,
        'Mexique' => 122273500,
        'Allemagne' => 82800000,);
            echo 'Le tableau contient ' .count($pays_population). 'éléments<br>';
    

echo "<br><br><strong>Exercice 14</strong><br>";
//Donnez la syntaxe qui permet d'afficher le deuxième élément du tableau $cocktails ?
    $cocktails = array(
        'Mojito',
        'Long Island Iced Tea',
        'Gin Fizz',
        'Moscow mule');
            echo 'Le deuxième éléments est "' .$cocktails[1]. '"<br>';
    //dans un tableau PHP le comptage commence à 0 et le nombre appelé est entre []
      

echo "<br><br><strong>Exercice 15</strong>";
//Faite en sorte que la fonction HelloWorld retourne exactement la valeur Hello World!
    function HelloWord()
        {$echo = 'Hello Word !!!'; return $echo;}
            echo '<br>' .HelloWord().'<br>';
    function afficher($message)
        {echo $message;}
            afficher('Hello Word <br>');


echo "<br><br><strong>Exercice 16</strong><br>";
//Créer une fonction qui s'appelle jeRetourneMonArgument(). Exemple :
//● Arg = "abc" ==> Return abc
//● Arg = 123 ==> Return 123
    function jeRetourneMonArgument($Arg)
        {return $Arg ;}
            echo jeRetourneMonArgument("123"). '<br>';


echo "<br><br><strong>Exercice 17</strong><br>";
//Créer une fonction qui s'appelle concatenation().
//Elle prendra deux arguments de type string.
//Elle devra retourner la concatenation des deux.
//Exemple : argument 1 = Antoine Argument 2 = Griezmann;
//Resultat : AntoineGriezmann
    function concatenation($argument1 , $argument2)
        {return $argument1 ." ". $argument2 ;} // pour créer un espace ." ".
            echo concatenation("Antoine" , "GRIEZMANN"). '<br>';


echo "<br><br><strong>Exercice 18</strong><br>";
//Créer une fonction qui s'appelle somme(). Elle prendra deux arguments de type int.
//Elle devra retourner la somme des deux. Exemple :
//● argument 1 = 5 Argument 2 = 5 ;
//● Resultat : 10
    function somme($argument3 , $argument4)
        {return $argument3 + $argument4 ;}
            echo somme(5 , 5). '<br>';


echo "<br><br><strong>Exercice 19</strong><br>";
//Créer une fonction qui s'appelle soustraction(). Elle prendra deux arguments de type int.
//Elle devra retourner la soustraction des deux. Exemple :
//● argument 1 = 5
//● Argument 2 = 5 ;
//● Resultat : 0
    function soustraction($argument5 , $argument6)
        {return $argument5 - $argument6 ;}
            echo soustraction(5 , 5). '<br>';


echo "<br><br><strong>Exercice 20</strong><br>";
//Créer une fonction qui s'appelle multiplication(). Elle prendra deux arguments de type int.
//Elle devra retourner la multiplication des deux. Exemple :
//● argument 1 = 5
//● Argument 2 = 5 ;
//● Resultat : 25
    function multiplication($argument7 , $argument8)
        {return $argument7 * $argument8 ;}
            echo multiplication(5 , 5). '<br>';


echo "<br><br><strong>Exercice 21</strong><br>";
//Créer une fonction qui s'appelle division(). Elle prendra deux arguments de type int.
//Elle devra retourner la division des deux. Exemple :
//● argument 1 = 5
//● Argument 2 = 5 ;
//● Resultat : 1
    function division($argument9 , $argument10)
        {return $argument9 / $argument10 ;}
            echo division(5 , 5). '<br>';


echo "<br><br><strong>Exercice 22</strong><br>";
//Créer une fonction qui s'appelle estIlMajeure(). Elle prendra un argument de type int.
//Elle devra retourner un boolean.
//Si age >= 18 elle doit retourner true
//si age < 18 elle doit retourner false Exemple :
//● age = 5 ==> false
//● age = 34 ==> true
    function estIlMajeure($age)
        {if ($age >= 18)
            {return (true) ;}
        else
            {return (false) ;}
        }
            var_dump (estIlMajeure(18)); //var_dump Affiche les informations d'une variable


echo "<br><br><strong>Exercice 23</strong><br>";
//Créer une fonction qui s'appelle premierElementTableau().
//Elle prendra un argument de type array.
//Elle devra retourner le premier élement du tableau.
//Si l'array est vide, il faudra retourner null;
    function premierElementTableau($arg1)
        {if(empty($arg1))
            {$message="null";}
        else
            {$message=$arg1[0];}
        return $message;
        }
            $tableau = array();
                echo premierElementTableau($tableau);


echo "<br><br><strong>Exercice 24</strong><br>";
//Créer une fonction qui s'appelle plusGrand().
//Elle prendra un argument de type array.
//Elle devra retourner le plus grand des élements présent dans l'array.
//Si l'array est vide, il faudra retourner null;
    function plusGrand($val)
        {if(empty($val))
            {$message ="null";} //Renvoi le message null si le tableau est vide
        else
            {$message = max($val);} //Renvoi la plus grande valeur du tableau array
        return $message;
        }
            $tableau1 = array();
                echo plusGrand($tableau1);


echo "<br><br><strong>Exercice 25</strong><br>";
//Créer une fonction from scratch qui s'appelle verificationPassword().
//Elle prendra un argument de type string.
//Elle devra retourner un boolean qui vaut true si le password fait au moins 8 caractères et false si moins.
    function verificationPassword($password)
        {if (strlen($password)  >=8) //strlen fonction qui retourne un nombre
            {return true;}
        else
            {return false;}
        }
            var_dump (verificationPassword("ceci est mon mot de passe"));
            echo strlen("abcde"); //fonction qui retourne le nombre de caractères


echo "<br><br><strong>Exercice 26</strong><br>";
//Créer une fonction qui s'appelle verificationPassword2(). Elle prendra un argument de type string. Elle devra retourner un boolean qui vaut true si le password respecte les règles suivantes :
//● Faire au moins 8 caractères
//● Avoir au moins 1 chiffre
//● Avoir au moins une majuscule et une minuscule
    function verificationPassword2($password2)
        {$chiffre = preg_match('([0-9])', $password2);
    //preg_match regarde si dans la ligne de caractère si correspondance
         $majuscule = preg_match('([A-Z])', $password2);
	     $minuscule = preg_match('([a-z])', $password2);
            print_r($minuscule);
                return($majuscule >0 && $minuscule >0 && $chiffre >0 && strlen($password2) >=8);
        }
            var_dump (verificationPassword2("Ceci est mon cod2" ));


echo "<br><br><strong>Exercice 27</strong><br>";
//Créer une fonction qui s'appelle capital(). Elle prendra un argument de type string. Elle devra retourner le nom de la capitale des pays suivants :
//● France ==> Paris
//● Allemagne ==> Berlin
//● Italie ==> Rome
//● Maroc ==> Rabat
//● Espagne ==> Madrid
//● Portugal ==> Lisbonne
//● Angleterre ==> Londres
//● Tout autre pays ==> Inconnu
//Il faudra utiliser la structure SWITCH pour faire cette exercice.
    function capital($capital)
        {$tableaucapitales = array(
            'France' => 'Paris' ,
            'Allemagne' => 'Berlin' ,
            'Italie' => 'Rome' ,
            'Maroc' => 'Rabat' ,
            'Espagne' => 'Madrid' ,
            'Portugal' => 'Lisbonne' ,
            'Angleterre' => 'Londres' ) ;
                switch ($capital)
                    {   case "France":     return $tableaucapitales['France'] ;    break;
                        case 'Allemagne':  return $tableaucapitales['Allemagne'];  break;
                        case 'Italie':     return $tableaucapitales['Italie'] ;    break;
                        case 'Maroc':      return $tableaucapitales['Maroc'] ;     break;
                        case 'Espagne':    return $tableaucapitales['Espagne'] ;   break;
                        case 'Portugal':   return $tableaucapitales['Portugal'] ;  break;
                        case 'Angleterre': return $tableaucapitales['Angleterre'] ;break;default:           return $tableaucapitales = "inconnu" ;  break;
                    }
        }
            echo capital("");


echo "<br><br><strong>Exercice 28</strong><br>";
//Créer une fonction qui s'appelle listHTML(). Elle prendra deux arguments :
//Un string représentant le nom de la liste
//Un array représentant les élements de cette liste
//Elle devra retourner une liste HTML. Chaque element de cette liste viendra du tableau passé en paramètre.
//Exemple : Paramètre : Titre : Capitale Liste : ["Alabama", "Alaska", "Arizona","Arkansas","Californie","Caroline du Nord","Caroline du Sud"]
//Résultat :<h3>Capitale</h3><ul><li>Montgomery</li><li>Juneau</li><li>Phoenix</li><li>Little Rock</li><li>Sacramento</li><li>Raleigh</li><li>Columbia</li></ul>
//Comme vous pouvez le voir il n'y a pas d'espace ni de retour à la ligne entre les élements de la liste.
//Pas d'espace non plus entre le titre et la liste.
//Si le titre est null et vide il faut que la fonction retourne null. Si l'array est vide, il faut que la fonction retourne null.
    function listHTML($titre , $tableau) //Créer une fonction avec deux éléments
        {if(!empty($titre)) //Si la variable $titre est remplie ... 
            {$message = "<h3>".$titre."</h3>" ;} //envoie les deuxièmes éléments
        else
            {$message = "nul" ;} //au sinon renvoie "nul"
        if(!empty($tableau)) //Si la variable $tableau est remplie ...
            {$message .= "<ul>" ;
                foreach ($tableau as $capital)
                    {$message .= "<li>" . $capital . "</li>" ;}
                        //recherche & envoie sous fourme de liste 
                $message .= "</ul>" ;
            }
        else
            {$message = "nul" ;}
        return $message ;
        }
        $capitalesA = array(
            'Alabama' => 'Montgomery' ,
            'Alaska' => 'Juneau' ,
            'Arizona' => 'Phoenix' ,
            'Arkansas' => 'Little Rock' ,
            'Californie' => 'Sacramento' ,
            'Caroline du Nord' => 'Raleigh' ,
            'Caroline du Sud' => 'Columbia') ;
                echo listHTML("Capitales Américaines", $capitalesA);

 
echo "<br><br><strong>Exercice 29</strong><br>";
//Créer une fonction qui s'appelle remplacerLesLettres(). Elle prendra un argument de type string. Elle devra retourner cette même string mais en remplacant les e par des 3, les i par des 1 et les o par des 0 Exemple :
//input : "Bonjour les amis" ==> Output : B0nj0ur l3s am1s
//input : "Les cours de programmation Web sont trops cools" ==>
//Output : L3s c0urs d3 pr0grammat10n W3b s0nt tr0ps c00ls
    function remplacerLesLettres($remplacel)
        {$remplacel = str_replace("e", "3", $remplacel) ;
         $remplacel = str_replace("i", "1", $remplacel) ;
         $remplacel = str_replace("o", "0", $remplacel) ;
            return $remplacel ;
        }
            echo remplacerLesLettres("Bonjour les amis")."<br>" ;
            echo remplacerLesLettres("Les cours de programmation Web sont trops cools") ;
    

echo "<br><br><strong>Exercice 30</strong><br>";
//Créer une fonction qui s'appelle quelleDate(). Elle devra retourner une string représentant la date actuelle sous le format suivant DD/MM/YYYY
//Où DD représente le jour actuelle, MM le mois actuel et YYYY l'année actuelle.
//Les valeurs doivent être numérique et non au format String.
    function quelleDate()
        {$date = date('d/m/Y'). '<br>'; return $date ;}
            echo quelleDate() ;

?>