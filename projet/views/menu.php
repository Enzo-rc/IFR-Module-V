<div id="container">
        
        <?php
        /*si non connecté bouton ="déconnexion s'affiche pas*/
        if (isset ($_SESSION ['utilisateur']))
         {
          ?>
          <a class= "button" href="index.php?page=deconnexion">Deconnexion</a>
        <?php

         }

        else{
        }
        ?>
        
        <?php
                
                $init = 1; //déclare le début de l'indice
                while($init <= 30) 
                {// while : bloucle infini 
                 // $init <= 30 arrète de bouvcler à 30 inclus
        ?>

        <a class="button" href="index.php?page=exercice<?=$init ?>" >Exercice
        <?= $init ?></a>
        <?php /* <?= $init ?></a> écrit en html les numéro de pages à la suite 1,2,3...*/ ?>  

        <?php $init=$init+1; /* écrémente */
                }       
        ?>
</div>