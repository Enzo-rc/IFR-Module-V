<div>
    <div>
        <h3>Exercice 2</h3><br>
        <h4>Consigne :</h4><br>
        <p>Calculer le prix TTC du produit.</p><br>
    </div>

    <div id="image_exercice">
        <img src="images/exercice2.JPG" alt="Exercice 2">
    </div>

    <div><h5>
        <?php
            $prix_ht = 50;
                $tva = 20;
                    $prix_ttc = $prix_ht * (1+$tva/100);
                     echo 'Le prix TTC du produit est de'.$prix_ttc.' €.<br><br>';
        ?>
    </h5></div>
</div>