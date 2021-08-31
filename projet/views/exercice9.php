<div>
    <div>
        <h3>Exercice 9</h3><br>
        <h4>Consigne :</h4><br>
        <p>Déclarer une variable avec le nom de votre choix et avec la valeur 0. Tant que cette variable n'atteint pas 20, il faut :<br>
        ● l'afficher ;<br>
        ● incrémenter sa valeur de 2 ;<br>
        Si la valeur de la variable est égale à 10, la mettre en valeur avec la balise HTML appropriée.</p><br>
    </div>

    <div id="image_exercice">
        <img src="images/exercice9.JPG" alt="Exercice 9">
    </div>

    <div><h5>
        <?php
            $aug = 0;
            while ($aug  <= 20)
                {$aug = $aug + 2;
                    if ($aug == 10)
                        {echo '<strong>'.$aug.'</strong><br>';}
                    else
                        {echo $aug.'<br>';}
                }
        ?>
    </h5></div>

</div>