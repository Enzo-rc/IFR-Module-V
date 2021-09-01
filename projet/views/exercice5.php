<div class="exercice">
    <div>
        <h3>Exercice 5</h3><br>
        <h4>Consigne :</h4><br>
        <p>Déclarer une variable $budget qui contient la somme de 1 553,89 €.<br>Déclarer une variable $achats qui contient la somme de 1 554,76 €.<br>Afficher si le budget permet de payer les achats.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
$budget = "1 553.89 €";
$achats = "1 554.76 €";
    if ($achats < $budget)
        {echo "ok, vous pouvez acheter <br>";}
    else
        {echo "Renflouez la caisse <br>";}
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                $budget = "1 553.89 €";
                $achats = "1 554.76 €";
                    if ($achats < $budget)
                        {echo "ok, vous pouvez acheter <br>";}
                    else
                        {echo "Renflouez la caisse <br>";}
            ?>
        </div>
    </div>
</div>