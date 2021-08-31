<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="TigreBYV.ico">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   

    <title>PROJET</title>

</head>

<body>
<div id="parent">
    <div id="left">
        <?php
            include_once('views/menu.php') ;
        ?>
    </div>
    <div id="right">
        <?php
        if (isset($_GET['page'])) {
                switch ($_GET['page']){
                    case 'exercice1':
                        include_once('views/exercice1.php') ;
                        break;

                    case 'exercice2':
                        include_once('views/exercice2.php') ;
                        break;

                    case 'exercice3':
                        include_once('views/exercice3.php') ;
                        break;
                    
                    case 'exercice4':
                        include_once('views/exercice4.php') ;
                        break;

                    case 'exercice5':
                        include_once('views/exercice5.php') ;
                        break;

                    case 'exercice6':
                        include_once('views/exercice6.php') ;
                        break;

                    case 'exercice7':
                        include_once('views/exercice7.php') ;
                        break;

                    case 'exercice8':
                        include_once('views/exercice8.php') ;
                        break;
                    
                    case 'exercice9':
                        include_once('views/exercice9.php') ;
                        break;

                    case 'exercice10':
                        include_once('views/exercice10.php') ;
                        break;

                    case 'exercice11':
                        include_once('views/exercice11.php') ;
                        break;

                    case 'exercice12':
                        include_once('views/exercice12.php') ;
                        break;

                    case 'exercice13':
                        include_once('views/exercice13.php') ;
                        break;

                    case 'exercice14':
                        include_once('views/exercice14.php') ;
                        break;
                    
                    case 'exercice15':
                        include_once('views/exercice15.php') ;
                        break;

                    case 'exercice16':
                        include_once('views/exercice16.php') ;
                        break;

                    case 'exercice17':
                        include_once('views/exercice17.php') ;
                        break;

                    case 'exercice18':
                        include_once('views/exercice18.php') ;
                        break;

                    case 'exercice19':
                        include_once('views/exercice19.php') ;
                        break;
                    
                    case 'exercice20':
                        include_once('views/exercice20.php') ;
                        break;

                    case 'exercice21':
                        include_once('views/exercice21.php') ;
                        break;

                    case 'exercice22':
                        include_once('views/exercice22.php') ;
                        break;

                    case 'exercice23':
                        include_once('views/exercice23.php') ;
                        break;

                    case 'exercice24':
                        include_once('views/exercice24.php') ;
                        break;

                    case 'exercice25':
                        include_once('views/exercice25.php') ;
                        break;

                    case 'exercice26':
                        include_once('views/exercice26.php') ;
                        break;

                    case 'exercice27':
                        include_once('views/exercice27.php') ;
                        break;
                    
                    case 'exercice28':
                        include_once('views/exercice28.php') ;
                        break;

                    case 'exercice29':
                        include_once('views/exercice29.php') ;
                        break;

                    case 'exercice30':
                        include_once('views/exercice30.php') ;
                        break;
            
                default:
                        # code...
                        break;
                }
            }

        ?>
    </div>
</div>  

    
</body>
</html>