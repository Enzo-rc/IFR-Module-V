<div class="exercice">
    <div>
        <h3>Exercice 8</h3><br>
        <h4>Consigne :</h4><br>
        <p>En utilisant la boucle for, afficher la table de multiplication du chiffre 5.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
for ( $i = 0; $i <= 10; $i++)
    {echo $i*5 . "<br>";}
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                for ( $i = 0; $i <= 10; $i++)
                    {echo $i*5 . '<br>';}
            ?>
        </div>
    </div>
</div>