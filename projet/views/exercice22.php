<div>
    <div>
        <h3>Exercice 22</h3><br>
        <h4>Consigne :</h4><br>
        <p>Créer une fonction qui s'appelle estIlMajeure(). Elle prendra un argument de type int.<br>
        Elle devra retourner un boolean.<br>
        Si age >= 18 elle doit retourner true<br>
        si age < 18 elle doit retourner false<br>
        Exemple :<br>
        ● age = 5 ==> false<br>
        ● age = 34 ==> true.</p><br>
    </div>


    <div>
        <?php
            function estIlMajeure($age)
                {if ($age >= 18)
                    {return (true) ;}
                else
                    {return (false) ;}
                }
                    var_dump (estIlMajeure(18));
        ?>
    </div>

</div>