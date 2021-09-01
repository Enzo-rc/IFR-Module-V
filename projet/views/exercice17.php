<div class="exercice">
    <div>
        <h3>Exercice 17</h3><br>
        <h4>Consigne :</h4><br>
        <p>Créer une fonction qui s'appelle concatenation().<br>
        Elle prendra deux arguments de type string.<br>
        Elle devra retourner la concatenation des deux.<br>
        Exemple : argument 1 = Antoine Argument 2 = Griezmann;<br>
        Resultat : AntoineGriezmann.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
function concatenation($argument1 , $argument2)
    {return $argument1 ." ". $argument2 ;} // pour créer un espace ." ".
        echo concatenation("Antoine" , "GRIEZMANN"). "<br>";
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                function concatenation($argument1 , $argument2)
                    {return $argument1 ." ". $argument2 ;} // pour créer un espace ." ".
                        echo concatenation("Antoine" , "GRIEZMANN"). '<br>';
            ?>
        </div>
    </div>
</div>