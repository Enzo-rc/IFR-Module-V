<div class="exercice">
    <div>
        <h3>Exercice 30</h3><br>
        <h4>Consigne :</h4><br>
        <p>Créer une fonction qui s'appelle quelleDate().<br>Elle devra retourner une string représentant la date actuelle sous le format suivant DD/MM/YYYY<br>
        Où DD représente le jour actuelle, MM le mois actuel et YYYY l'année actuelle.<br>
        Les valeurs doivent être numérique et non au format String.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
function quelleDate()
    {$date = date("d/m/Y"). "<br>"; return $date ;}
        echo quelleDate() ;
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                function quelleDate()
                    {$date = date('d/m/Y'). '<br>'; return $date ;}
                        echo quelleDate() ;
            ?>
        </div>
    </div>
</div>