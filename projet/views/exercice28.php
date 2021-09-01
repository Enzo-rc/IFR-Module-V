<div class="exercice">
    <div>
        <h3>Exercice 28</h3><br>
        <h4>Consigne :</h4><br>
        <p>Créer une fonction qui s'appelle listHTML().<br>
        Elle prendra deux arguments :<br>
        - Un string représentant le nom de la liste<br>
        - Un array représentant les élements de cette liste<br>
        Elle devra retourner une liste HTML. Chaque element de cette liste viendra du tableau passé en paramètre.</p><br>
        <p>Exemple : Paramètre : Titre : Capitale Liste : ["Alabama", "Alaska", "Arizona","Arkansas","Californie","Caroline du Nord","Caroline du Sud"]<br>
        Résultat :<h5>Capitale<ul><li>Montgomery</li><li>Juneau</li><li>Phoenix</li><li>Little Rock</li><li>Sacramento</li><li>Raleigh</li><li>Columbia</li></ul></h5><br>
        <p>Comme vous pouvez le voir il n'y a pas d'espace ni de retour à la ligne entre les élements de la liste.<br>
        Pas d'espace non plus entre le titre et la liste.<br>
        Si le titre est null et vide il faut que la fonction retourne null.<br>Si l'array est vide, il faut que la fonction retourne null.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
function listHTML($titre , $tableau)
    {if(!empty($titre)) 
        {$message = "<h3>".$titre."</h3>" ;}
    else
        {$message = "nul" ;}
    if(!empty($tableau))
        {$message .= "<ul>" ;
            foreach ($tableau as $capital)
                {$message .= "<li>" . $capital . "</li>" ;}
            $message .= "</ul>" ;
        }
    else
        {$message = "nul" ;}
    return $message ;
    }
    $capitalesA = array(
        "Alabama" => "Montgomery" ,
        "Alaska" => "Juneau" ,
        "Arizona" => "Phoenix" ,
        "Arkansas" => "Little Rock" ,
        "Californie" => "Sacramento" ,
        "Caroline du Nord" => "Raleigh" ,
        "Caroline du Sud" => "Columbia") ;
            echo listHTML("Capitales Américaines", $capitalesA);
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                function listHTML($titre , $tableau)
                    {if(!empty($titre)) 
                        {$message = "<h3>".$titre."</h3>" ;}
                    else
                        {$message = "nul" ;}
                    if(!empty($tableau))
                        {$message .= "<ul>" ;
                            foreach ($tableau as $capital)
                                {$message .= "<li>" . $capital . "</li>" ;}
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
            ?>
        </div>
    </div>
</div>