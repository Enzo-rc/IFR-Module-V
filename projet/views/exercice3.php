<div class="exercice">
    <div>
        <h3>Exercice 3</h3><br>
        <h4>Consigne :</h4><br>
        <p>Déclarer une variable $test qui contient la valeur 42. En utilisant la fonction var_dump(),<br>faire en sorte que le type de la variable $test soit string et que la valeur soit bien de 42.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
$test = "42";
    var_dump($test); 
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                $test = "42";
                    var_dump($test);
            ?>
        </div>
    </div>
</div>