<div class="exercice">
    <div>
        <h3>Exercice 14</h3><br>
        <h4>Consigne :</h4><br>
        <p>Donnez la syntaxe qui permet d'afficher le deuxième élément du tableau $cocktails.
        </p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
$cocktails = array(
    "Mojito",
    "Long Island Iced Tea",
    "Gin Fizz",
    "Moscow mule");
        echo "Le deuxième éléments est " .$cocktails[1]. "<br>";
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                $cocktails = array(
                    'Mojito',
                    'Long Island Iced Tea',
                    'Gin Fizz',
                    'Moscow mule');
                        echo 'Le deuxième éléments est ' .$cocktails[1];
            ?>
        </div>
    </div>
</div>