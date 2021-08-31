<div>
    <div>
        <h3>Exercice 24</h3><br>
        <h4>Consigne :</h4><br>
        <p>Créer une fonction qui s'appelle plusGrand().<br>
        Elle prendra un argument de type array.<br>
        Elle devra retourner le plus grand des élements présent dans l'array.<br>
        Si l'array est vide, il faudra retourner null;</p><br>
    </div>


    <div>
        <?php
            function plusGrand($val)
                {if(empty($val))
                    {$message ="null";}
                else
                    {$message = max($val);}
                return $message;
                }
                    $tableau1 = array();
                        echo plusGrand($tableau1);
        ?>
    </div>

</div>