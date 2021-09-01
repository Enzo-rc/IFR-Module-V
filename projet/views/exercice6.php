<div class="exercice">
    <div>
        <h3>Exercice 6</h3><br>
        <h4>Consigne :</h4><br>
        <p>Déclarer une variable $age qui contient la valeur de type integer de votre choix.<br>Réaliser une condition pour afficher si la personne est mineure ou majeure.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
$sexe = "18";
    if ($sexe < "18")
        {echo "Vous êtes mineur, désolé <br>";}
    else
        {echo "Bienvenue, vous êtes majeur<br>";}
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                $sexe = "18";
                    if ($sexe < "18")
                        {echo "Vous êtes mineur, désolé <br>";}
                    else
                        {echo "Bienvenue, vous êtes majeur<br>";}
            ?>
        </div>
    </div>
</div>