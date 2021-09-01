<div class="exercice">
    <div>
        <h3>Exercice 11</h3><br>
        <h4>Consigne :</h4><br>
        <p>En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires.<br>
        Puis, tester si le chiffre 42 est dans le tableau et afficher un message en conséquence.<br>
        Enfin, afficher le contenu de votre tableau avec var_dump.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
$init = 0;
while($init < 10)
    {$var = rand(0,43);
     $tabNbrRand[] = $var;
     $init++;
    }
foreach($tabNbrRand as $nombre)
    {if ($nombre == 42)
        {echo "<br>Nombre 42 est proposé <br>";}
     }
        print_r($tabNbrRand); 
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                $init = 0;
                while($init < 10)
                    {$var = rand(0,43);
                    $tabNbrRand[] = $var;
                    $init++;
                    }
                foreach($tabNbrRand as $nombre)
                    {if ($nombre == 42)
                        {echo "<br>Nombre 42 est proposé <br>";}
                    }
                        print_r($tabNbrRand); 
            ?>
        </div>
    </div>
</div>