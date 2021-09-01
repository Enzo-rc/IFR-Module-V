<div class="exercice">
    <div>
        <h3>Exercice 20</h3><br>
        <h4>Consigne :</h4><br>
        <p>Créer une fonction qui s'appelle multiplication().<br>Elle prendra deux arguments de type int.<br>
        Elle devra retourner la multiplication des deux.<br>
        Exemple :<br>
        ● argument 1 = 5<br>
        ● Argument 2 = 5 ;<br>
        ● Resultat : 25.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
function multiplication($argument7 , $argument8)
    {return $argument7 * $argument8 ;}
        echo multiplication(5 , 5). "<br>";
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                function multiplication($argument7 , $argument8)
                    {return $argument7 * $argument8 ;}
                        echo multiplication(5 , 5). '<br>';
            ?>
        </div>
    </div>
</div>