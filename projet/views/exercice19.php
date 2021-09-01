<div class="exercice">
    <div>
        <h3>Exercice 19</h3><br>
        <h4>Consigne :</h4><br>
        <p>Créer une fonction qui s'appelle soustraction(). Elle prendra deux arguments de type int.<br>
        Elle devra retourner la soustraction des deux.<br>
        Exemple :<br>
        ● argument 1 = 5<br>
        ● Argument 2 = 5 ;<br>
        ● Resultat : 0.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
function soustraction($argument5 , $argument6)
    {return $argument5 - $argument6 ;}
        echo soustraction(5 , 5). "<br>";
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                function soustraction($argument5 , $argument6)
                    {return $argument5 - $argument6 ;}
                        echo soustraction(5 , 5). '<br>';
            ?>
        </div>
    </div>
</div>