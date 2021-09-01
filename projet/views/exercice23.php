<div class="exercice">
    <div>
        <h3>Exercice 23</h3><br>
        <h4>Consigne :</h4><br>
        <p>Créer une fonction qui s'appelle premierElementTableau().<br>
        Elle prendra un argument de type array.<br>
        Elle devra retourner le premier élement du tableau.<br>
        Si l'array est vide, il faudra retourner null;</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
function premierElementTableau($arg1)
    {if(empty($arg1))
        {$message="null";}
    else
        {$message=$arg1[0];}
    return $message;
    }
        $tableau = array();
            echo premierElementTableau($tableau);
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                function premierElementTableau($arg1)
                    {if(empty($arg1))
                        {$message="null";}
                    else
                        {$message=$arg1[0];}
                    return $message;
                    }
                        $tableau = array();
                            echo premierElementTableau($tableau);
            ?>
        </div>
    </div>
</div>