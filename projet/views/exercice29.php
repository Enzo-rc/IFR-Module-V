<div class="exercice">
    <div>
        <h3>Exercice 29</h3><br>
        <h4>Consigne :</h4><br>
        <p>Créer une fonction qui s'appelle remplacerLesLettres().<br>Elle prendra un argument de type string.<br>Elle devra retourner cette même string mais en remplacant les e par des 3, les i par des 1 et les o par des 0 Exemple :<br>
        input : "Bonjour les amis"<br>
        ==> Output : B0nj0ur l3s am1s<br>
        input : "Les cours de programmation Web sont trops cools"<br>
        ==> Output : L3s c0urs d3 pr0grammat10n W3b s0nt tr0ps c00ls.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
function remplacerLesLettres($remplacel)
    {$remplacel = str_replace("e", "3", $remplacel);
    $remplacel = str_replace("i", "1", $remplacel);
    $remplacel = str_replace("o", "0", $remplacel);
        return $remplacel;
    }
        echo remplacerLesLettres("Bonjour les amis")."<br>" ;
        echo remplacerLesLettres("Les cours de programmation Web sont trops cools");
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                function remplacerLesLettres($remplacel)
                    {$remplacel = str_replace("e", "3", $remplacel);
                    $remplacel = str_replace("i", "1", $remplacel);
                    $remplacel = str_replace("o", "0", $remplacel);
                        return $remplacel;
                    }
                        echo remplacerLesLettres("Bonjour les amis")."<br>" ;
                        echo remplacerLesLettres("Les cours de programmation Web sont trops cools");
            ?>
        </div>
    </div>
</div>