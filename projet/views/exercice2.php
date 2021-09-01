<div class="exercice">
    <div>
        <h3>Exercice 2</h3><br>
        <h4>Consigne :</h4><br>
        <p>Calculer le prix TTC du produit.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
$prix_ht = 50;
    $tva = 20;
        $prix_ttc = $prix_ht * (1+$tva/100);
        echo "Le prix TTC du produit est de".$prix_ttc." €.<br><br>"; 
?>');
        ?></code></pre>
    
        <div class="resultat">
            <?php
                $prix_ht = 50;
                    $tva = 20;
                        $prix_ttc = $prix_ht * (1+$tva/100);
                        echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
            ?>
        </div>
    </div>
</div>