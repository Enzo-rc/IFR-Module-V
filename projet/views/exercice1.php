<div class="exercice">
    <div>
        <h3>Exercice 1</h3><br>
        <h4>Consigne :</h4><br>
        <p>Modifier le code ci-dessous pour calculer la moyenne des notes.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;
    $moyenne = ($note_maths + $note_francais + $note_histoire_geo)/3;
        echo "La moyenne est de ".$moyenne." / 20.<br><br>"; 
?>') ;
        ?></code></pre>

        <div class="resultat">
            <?php
                $note_maths = 15;
                $note_francais = 12;
                $note_histoire_geo = 9;
                    $moyenne = ($note_maths + $note_francais + $note_histoire_geo)/3;
                        echo 'La moyenne est de '.$moyenne.' / 20.';
            ?>
        </div>
    </div>
</div>