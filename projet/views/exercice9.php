<div class="exercice">
    <div>
        <h3>Exercice 9</h3><br>
        <h4>Consigne :</h4><br>
        <p>Déclarer une variable avec le nom de votre choix et avec la valeur 0.<br>Tant que cette variable n'atteint pas 20, il faut :<br>
        ● l'afficher ;<br>
        ● incrémenter sa valeur de 2 ;<br>
        Si la valeur de la variable est égale à 10, la mettre en valeur avec la balise HTML appropriée.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
$aug = 0;
while ($aug  <= 20)
    {$aug = $aug + 2;
        if ($aug == 10)
            {echo "<strong>".$aug."</strong><br>";}
        else
            {echo $aug."<br>";}
    }
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                $aug = 0;
                while ($aug  <= 20)
                    {$aug = $aug + 2;
                        if ($aug == 10)
                            {echo '<strong>'.$aug.'</strong><br>';}
                        else
                            {echo $aug.'<br>';}
                    }
            ?>
        </div>
    </div>
</div>