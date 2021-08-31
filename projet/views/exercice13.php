<div>
    <div>
        <h3>Exercice 13</h3><br>
        <h4>Consigne :</h4><br>
        <p>En utilisant le tableau ci-dessous, compter le nombre d'éléments du tableau.</p><br>
    </div>


    <div>
        <?php
            $pays_population = array(
                'France' => 67595000,
                'Suede' => 9998000,
                'Suisse' => 8417000,
                'Kosovo' => 1820631,
                'Malte' => 434403,
                'Mexique' => 122273500,
                'Allemagne' => 82800000,);
                    echo 'le tableau contient ' .count($pays_population). 'éléments<br>';
        ?>
    </div>

</div>