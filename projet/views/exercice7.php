<div class="exercice">
    <div>
        <h3>Exercice 7</h3><br>
        <h4>Consigne :</h4><br>
        <p>Déclarer une variable $heure qui contient la valeur de type integer de votre choix comprise entre 0 et 24.<br>Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
$heure = "22";
                if($heure >= "00" AND $heure < "13")
                    {echo "Bonjour !<br>";}
                elseif($heure >= "13" AND $heure < "18")
                    {echo "Bonne après-midi !<br>";}
                else
                    {echo "Bonsoir !<br>";}
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                $heure = "22";
                    if($heure >= "00" AND $heure < "13")
                        {echo "Bonjour !<br>";}
                    elseif($heure >= "13" AND $heure < "18")
                        {echo "Bonne après-midi !<br>";}
                    else
                        {echo "Bonsoir !<br>";}
            ?>
        </div>
    </div>
</div>