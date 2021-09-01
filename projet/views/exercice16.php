<div class="exercice">
    <div>
        <h3>Exercice 16</h3><br>
        <h4>Consigne :</h4><br>
        <p>Créer une fonction qui s'appelle jeRetourneMonArgument().<br>
        Exemple :<br>
        ● Arg = "abc" ==> Return abc<br>
        ● Arg = 123 ==> Return 123.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
function jeRetourneMonArgument($Arg)
    {return $Arg ;}
        echo jeRetourneMonArgument("123"). "<br>";
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                function jeRetourneMonArgument($Arg)
                    {return $Arg ;}
                        echo jeRetourneMonArgument("123"). '<br>';
            ?>
        </div>
    </div>
</div>