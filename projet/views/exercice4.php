<div class="exercice">
    <div>
        <h3>Exercice 4</h3><br>
        <h4>Consigne :</h4><br>
        <p>Déclarer une variable $sexe qui contient une chaîne de caractères.<br>Créer une condition qui affiche un message différent en fonction de la valeur de la variable.
        </p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
    $sexe = "M";
if ($sexe == "M")
    {echo "Homme<br>";}
else
    {echo "Femme<br><br>";} 
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                $sexe = "M";
                    if ($sexe == "M")
                        {echo "Homme<br>";}
                    else
                        {echo "Femme<br><br>";}
            ?>
        </div>
    </div>
</div>