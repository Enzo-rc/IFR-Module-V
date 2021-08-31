<div>
    <div>
        <h3>Exercice 26</h3><br>
        <h4>Consigne :</h4><br>
        <p>Créer une fonction qui s'appelle verificationPassword2(). Elle prendra un argument de type string. Elle devra retourner un boolean qui vaut true si le password respecte les règles suivantes :<br>
        ● Faire au moins 8 caractères<br>
        ● Avoir au moins 1 chiffre<br>
        ● Avoir au moins une majuscule et une minuscule.</p><br>
    </div>


    <div>
        <?php
            function verificationPassword2($password2)
                {$chiffre = preg_match('([0-9])', $password2);
                $majuscule = preg_match('([A-Z])', $password2);
                $minuscule = preg_match('([a-z])', $password2);
                    print_r($minuscule);
                        return ($majuscule >0 && $minuscule >0 && $chiffre >0 && strlen($password2) >=8;
                }
                    var_dump (verificationPassword2("Ceci est mon cod2" ));
        ?>
    </div>

</div>