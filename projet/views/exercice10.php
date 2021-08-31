<div>
    <div>
        <h3>Exercice 10</h3><br>
        <h4>Consigne :</h4><br>
        <p>Déclarer une variable de type array qui stocke les informations suivantes :<br>
        ● France : Paris<br>
        ● Allemagne : Berlin<br>
        ● Italie : Rome<br>
        Afficher les valeurs de tous les éléments du tableau en utilisant la boucle foreach.<p><br>
    </div>

    <div id="image_exercice">
        <img src="images/exercice10.JPG" alt="Exercice 10">
    </div>

    <div><h5>
        <?php
            $pays =array('FRANCE' => 'Paris', 'ALLEMAGNE' => 'Berlin', 'ITALIE' => 'Rome',);
                foreach( $pays as $ville)
                    {echo $ville.'<br>';}
        ?>
    </h5></div>

</div>