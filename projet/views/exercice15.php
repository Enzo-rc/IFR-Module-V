<div class="exercice">
    <div>
        <h3>Exercice 15</h3><br>
        <h4>Consigne :</h4><br>
        <p>Faite en sorte que la fonction HelloWorld retourne exactement la valeur Hello World!</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
function HelloWord()
    {$echo = "Hello Word !!!"; return $echo;}
        echo "<br>" .HelloWord()."<br>";
function afficher($message)
    {echo $message;}
        afficher("Hello Word <br>");
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                function HelloWord()
                    {$echo = 'Hello Word !!!'; return $echo;}
                        echo '<br>' .HelloWord().'<br>';
                function afficher($message)
                    {echo $message;}
                        afficher('Hello Word <br>');
            ?>
        </div>
    </div>
</div>