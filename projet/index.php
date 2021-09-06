<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="TigreBYV.ico">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.2.0/styles/github.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>

    <title>PROJET</title>

</head>

<body>
<div id="parent">
    <div id="left">
        <?php
        /*session_destroy ();*/
            include_once('views/menu.php') ;
        ?>
    </div>
    <div id="right">
        <?php
        if (isset($_SESSION["message"]))
            {
              echo"<h5>".$_SESSION["message"]."</h5>";
              session_destroy ();
            }


        if (isset ($_SESSION ['utilisateur']))
        {
            if (isset($_GET['page'])) /*isset : vérifie si la valeur est assigné ;
                                        GET liste d'éléments, données*/
            {
                    $jaitrouve=false ;
                    if (file_exists('views/'.$_GET['page'].'.php'))
                    { 
                        /*echo $_GET['page']  récupère dans l'URL et affiche le titre de page */ 
                        $jaitrouve=true ;
                        include_once('views/'.$_GET['page'].'.php') ;
                        } /*include_once : affiche (...) */
                    /*if ($_GET['page']=="traitement")
                    {
                        include_once('traitement.php') ;
                        $jaitrouve=true ;
                        }*/
                    if ($_GET['page']=="deconnexion") {
                        /*session_destroy();*/
                        $_SESSION=[];
                        $jaitrouve=true;
                        $_SESSION["message"]="Vous avez été deconnecté";
        ?>
            <script>
                document.location.href="index.php";
            </script>
        <?php                 
                    }
                    /*si $jaitrouve est = à faux affiche "J'ai ... page"*/
                    if ($jaitrouve==false)
                    {
                        echo "J'ai pas trouvé de page." ;
                        }

                }
        }
        else {
            include_once('login.php') ;
        }
        ?>
    </div>
</div>  

<script>hljs.highlightAll();</script>
</body>
</html>