<div class="exercice">
    <div>
        <h3>Exercice 25</h3><br>
        <h4>Consigne :</h4><br>
        <p>Créer une fonction from scratch qui s'appelle verificationPassword().<br>
        Elle prendra un argument de type string.<br>
        Elle devra retourner un boolean qui vaut true si le password fait au moins 8 caractères et false si moins.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
function verificationPassword($password)
    {if (strlen($password)  >=8)
        {return true;}
    else
        {return false;}
    }
        var_dump (verificationPassword("ceci est mon mot de passe" ));
            echo strlen("abcde");
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                function verificationPassword($password)
                    {if (strlen($password)  >=8)
                        {return true;}
                    else
                        {return false;}
                    }
                        var_dump (verificationPassword("ceci est mon mot de passe" ));
                            echo strlen("abcde");
            ?>
        </div>
    </div>
</div>