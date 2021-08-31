<div>
    <div>
        <h3>Exercice 5</h3><br>
        <h4>Consigne :</h4><br>
        <p>Déclarer une variable $budget qui contient la somme de 1 553,89 €. Déclarer une variable $achats qui contient la somme de 1 554,76 €. Afficher si le budget permet de payer les achats.</p><br>
    </div>

    <div id="image_exercice">
        <img src="images/exercice5.JPG" alt="Exercice 5">
    </div>

    <div><h5>
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