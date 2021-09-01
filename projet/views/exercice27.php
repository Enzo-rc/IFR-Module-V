<div class="exercice">
    <div>
        <h3>Exercice 27</h3><br>
        <h4>Consigne :</h4><br>
        <p>Créer une fonction qui s'appelle capital().<br>Elle prendra un argument de type string. Elle devra retourner le nom de la capitale des pays suivants :<br>
        ● France ==> Paris<br>
        ● Allemagne ==> Berlin<br>
        ● Italie ==> Rome<br>
        ● Maroc ==> Rabat<br>
        ● Espagne ==> Madrid<br>
        ● Portugal ==> Lisbonne<br>
        ● Angleterre ==> Londres<br>
        ● Tout autre pays ==> Inconnu<br>
        Il faudra utiliser la structure SWITCH pour faire cette exercice.</p><br>
    </div>

    <div class="magrille">
        <pre><code class="hljs language-php"><?php
echo htmlspecialchars('<?php
function capital($capital)
    {$tableaucapitales = array(
        "France" => "Paris" ,
        "Allemagne" => "Berlin" ,
        "Italie" => "Rome" ,
        "Maroc" => "Rabat" ,
        "Espagne" => "Madrid" ,
        "Portugal" => "Lisbonne" ,
        "Angleterre" => "Londres" ) ;
            switch ($capital)
                {   case "France":     return $tableaucapitales["France"] ;     break;
                    case "Allemagne":  return $tableaucapitales["Allemagne"];   break;
                    case "Italie":     return $tableaucapitales["Italie"] ;     break;
                    case "Maroc":      return $tableaucapitales["Maroc"] ;      break;
                    case "Espagne":    return $tableaucapitales["Espagne"] ;    break;
                    case "Portugal":   return $tableaucapitales["Portugal"] ;   break;
                    case "Angleterre": return $tableaucapitales["Angleterre"] ; break;
                    default:           return $tableaucapitales = "inconnu"   ; break;
                }
    }
        echo capital("");
?>');
        ?></code></pre>

        <div class="resultat">
            <?php
                function capital($capital)
                    {$tableaucapitales = array(
                        'France' => 'Paris' ,
                        'Allemagne' => 'Berlin' ,
                        'Italie' => 'Rome' ,
                        'Maroc' => 'Rabat' ,
                        'Espagne' => 'Madrid' ,
                        'Portugal' => 'Lisbonne' ,
                        'Angleterre' => 'Londres' ) ;
                            switch ($capital)
                                {   case "France":     return $tableaucapitales['France'] ;    break;
                                    case 'Allemagne':  return $tableaucapitales['Allemagne'];  break;
                                    case 'Italie':     return $tableaucapitales['Italie'] ;    break;
                                    case 'Maroc':      return $tableaucapitales['Maroc'] ;     break;
                                    case 'Espagne':    return $tableaucapitales['Espagne'] ;   break;
                                    case 'Portugal':   return $tableaucapitales['Portugal'] ;  break;
                                    case 'Angleterre': return $tableaucapitales['Angleterre'] ;break;default:     return $tableaucapitales = "inconnu" ;  break;
                                }
                    }
                        echo capital("");
            ?>
        </div>
    </div>
</div>