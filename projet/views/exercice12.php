<div>
    <div>
        <h3>Exercice 12</h3><br>
        <h4>Consigne :</h4><br>
        <p>En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires.<br>
        Puis, trier les valeurs dans deux tableaux distincts.<br>
        Le premier contiendra les valeurs inférieures à 50 et le second contiendra les valeurs supérieures ou égales à 50.<br>
        Enfin, afficher le contenu des deux tableaux.</p><br>
    </div>

    <div>
        
    </div>


    <div>
        <?php
            $init = 0;
            while($init < 10)
                {$var = rand(0,100);
                 $tabNbrRand[] = $var;
                 $init++;
                }
                    print_r($tabNbrRand);
            foreach($tabNbrRand as $nombre)
                {if ($nombre < 50)
                    {$tabInf50[] = $nombre;}
            if ($nombre >=50)
                    {$tabSup50[] = $nombre;}
                }
                    echo '<br>Tableau inférieur à 50 <br>';
                        print_r($tabInf50);
                    echo '<br>Tableau supérieur à 50 <br>';
                        print_r($tabSup50);
        ?>
    </div>

</div>