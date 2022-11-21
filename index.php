<?php

if (isset($_GET['theme'])) {
    $color = $_GET['theme'];
} else {
    $color = 'blue';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon.png">
    <title>House Control • Bienvenue</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/theme/<?=$color?>.css">
    <link rel="stylesheet" href="css/index/content.css">
    <link rel="stylesheet" href="css/index/responsive.css">
    <link rel="stylesheet" href="css/index/animation.css">

</head>

<body>

    <div class="accueil">
        <div class="bloc-fondu">
        </div>
        <div class="bloc-background">
            <div class="container">
                <header>
                    <input type="checkbox" id="check">
                    <label for="check" class="labelNav">
                        <i class='bx bx-menu' id="btn"></i>
                        <i class='bx bx-x' id="cancel"></i>
                    </label>

                    <ul>
                        <li><a href="index.html" class="active">Accueil</a></li>
                        <li><a href="#page-1" class="scrolldown" class="page">Connectivitées</a></li>
                    </ul>

                    <div class="param">
                        <input type="checkbox" id="paramCheck" class="paramCheck">  
                        <label for="paramCheck"><i class='bx bx-cog'></i></label>
                        <div class="changeTheme" id="themeSelect">
                            <a href="?theme=blue"><button></button></a>
                            <a href="?theme=red"><button></button></a>
                            <a href="?theme=yellow"><button></button></a>
                            <a href="?theme=green"><button></button></a>
                            <a href="?theme=pink"><button></button></a>
                        </div>
                    </div>

                </header>
        
                <div class="content">
                    <div class="head">
                        <div class="left">
                            <div class="title"><h1>House <span>Control</span></h1></div>
                            <div class="description"><h2>Venez découvrir une nouvelle façon de controler votre maison. Sur ce site vous pourrez activer / desactiver toutes les connectivités de votre maison !</h2></div>
                            <button class='scrolldown' href="#page-1">Découvrir</button>
                        </div>
                        <div class="right">
                            <img src="img/phone.svg">
                        </div>
                    </div>
                    <div class="separation"></div>

                        <div class="titleCat" id="page-1">
                            <h1>Connectivitées</h1>
                            <h2>Controlez l'entiereté de votre maison !</h2>
                        </div>
    
                        <div class="selectCat">
                            <button class="active" id="selectAll"><h4>Toutes les connectivités</h4></button>
                            <button class="select" id="selectchauffages"><h4>Chauffage</h4></button>
                            <button class="select" id="selectportes"><h4>Portes</h4></button>
                            <button class="select" id="selecteclairages"><h4>Eclairage</h4></button>
                        </div>
                        <div class="galerie">
                            
                          <?php
                              if (isset($_GET["action"])){ // vérifie si le champs action était disponible dans l'URL
                                  $action = $_GET["action"] ; // récupération de la valeur du champs action
                                  $nom = $_GET["nom"] ;
                                  $script = "" ;
                                  switch($action){ // selon la valeur du champ action
                                    default: // par défaut on ne fait rien
                                      break;
                                    case "on": // si action = 'on'
                                      $script = "script/on-led.py";
                                      break;
                                    case "off": // si action = 'off'
                                      $script = "script/off-led.py";
                                      break;
                                    case "temp": // si action = 'temp'
                                      $script = "script/temp.py";
                                      
                                      break;
                                  }
                                }
                                if (strlen($script)){ // si le nom du script a été renseigné (longueur non nulle)
                                    if(isset($_GET["nom"])){
                                        $command = escapeshellcmd("python3 $script $nom"); // construction de la commande
                                        $result = shell_exec($command); // exécution de la commande
                                    } else {
                                        $command = escapeshellcmd("python3 $script"); // construction de la commande
                                        $result = shell_exec($command); // exécution de la commande
                                        echo '<script type="text/JavaScript"> 
                                                window.onload = function () {tempShow();}
                                             </script>'
                                        ;
                                    }
                                }
                          ?>
                            
                            <div class="item chauffage">
                                <div class="title"><h1>Radiateur salon</h1></div>
                                <div class="photo"><img src="img/items/radiateurs.png" alt=""></div>
                                <div class="bouton">
                                    <h4>Chauffage</h4>
                                    <div class="infoContent">
                                        <input type="checkbox" id="infoUn" class="infoUn">
                                        <label for="infoUn" class=infoButton><i class='bx bx-info-circle'></i></label>
                                        <div class="infoExtend">
                                            <label for="infoUn"><div class="left"></div></label>
                                            <div class="right">
                                                <div class="head">
                                                    <div class="title"><h4>Radiateur salon</h4></div>
                                                    <label for="infoUn"><i class='bx bxs-chevron-right-circle'></i></label>
                                                </div>
                                                <div class="photo"><img src="img/items/radiateurs.png" alt=""></div>
                                                <div class="management">
                                                    <button><a href="?theme=<?=$color?>&amp;action=on&amp;nom=11">ALLUMER</a></button>
                                                    <button><a href="?theme=<?=$color?>&amp;action=off&amp;nom=11">ETEINDRE</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item chauffage">
                                <div class="title"><h1>Radiateur chambre</h1></div>
                                <div class="photo"><img src="img/items/radiateurs.png" alt=""></div>
                                <div class="bouton">
                                    <h4>Chauffage</h4>
                                    <div class="infoContent">
                                        <input type="checkbox" id="infoDeux" class="infoDeux">
                                        <label for="infoDeux" class=infoButton><i class='bx bx-info-circle'></i></label>
                                        <div class="infoExtend">
                                            <label for="infoDeux"><div class="left"></div></label>
                                            <div class="right">
                                                <div class="head">
                                                    <div class="title"><h4>Radiateur chambre</h4></div>
                                                    <label for="infoDeux"><i class='bx bxs-chevron-right-circle'></i></label>
                                                </div>
                                                <div class="photo"><img src="img/items/radiateurs.png" alt=""></div>
                                                <div class="management">
                                                    <button><a href="?theme=<?=$color?>&amp;action=on&amp;nom=13">ALLUMER</a></button>
                                                    <button><a href="?theme=<?=$color?>&amp;action=off&amp;nom=13">ETEINDRE</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item chauffage">
                                <div class="title"><h1>Température</h1></div>
                                <div class="photo"><img src="img/items/temp.png" alt=""></div>
                                <div class="bouton">
                                    <h4>Chauffage</h4>
                                    <div class="infoContent" id="temp">
                                        <input type="checkbox" id="infoTrois" class="infoTrois">
                                        <label for="infoTrois" class=infoButton><i class='bx bx-info-circle'></i></label>
                                        <div class="infoExtend">
                                            <label for="infoTrois"><div class="left"></div></label>
                                            <div class="right">
                                                <div class="head">
                                                    <div class="title"><h4>Température</h4></div>
                                                    <label for="infoTrois"><i class='bx bxs-chevron-right-circle'></i></label>
                                                </div>
                                                <div class="photo"><img src="img/items/temp.png" alt=""></div>
                                                <div class="management temp">
                                                    <button><a href="?theme=<?=$color?>&amp;action=temp">TEMPERATURE</a></button>
                                                    <?php echo("<p>" .$result."</p>");?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item portes">
                                <div class="title"><h1>Porte Garage</h1></div>
                                <div class="photo" style="align-items: end;"><img src="img/items/garage.png" alt=""></div>
                                <div class="bouton">
                                    <h4>Portes</h4>
                                    <div class="infoContent">
                                        <input type="checkbox" id="infoQuatre" class="infoQuatre">
                                        <label for="infoQuatre" class=infoButton><i class='bx bx-info-circle'></i></label>
                                        <div class="infoExtend">
                                            <label for="infoQuatre"><div class="left"></div></label>
                                            <div class="right">
                                                <div class="head">
                                                    <div class="title"><h4>Porte Garage</h4></div>
                                                    <label for="infoQuatre"><i class='bx bxs-chevron-right-circle'></i></label>
                                                </div>
                                                <div class="photo"><img src="img/items/garage.png" alt=""></div>
                                                <div class="management">
                                                    <button><a href="?theme=<?=$color?>&amp;action=on&amp;nom=15">OUVRIR</a></button>
                                                    <button><a href="?theme=<?=$color?>&amp;action=off&amp;nom=15">FERMER</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item portes">
                                <div class="title"><h1>Porte 42</h1></div>
                                <div class="photo" style="align-items: end;"><img src="img/items/porte.png" alt=""></div>
                                <div class="bouton">
                                    <h4>Portes</h4>
                                    <div class="infoContent">
                                        <input type="checkbox" id="infoCinq" class="infoCinq">
                                        <label for="infoCinq" class=infoButton><i class='bx bx-info-circle'></i></label>
                                        <div class="infoExtend">
                                            <label for="infoCinq"><div class="left"></div></label>
                                            <div class="right">
                                                <div class="head">
                                                    <div class="title"><h4>Porte 42</h4></div>
                                                    <label for="infoCinq"><i class='bx bxs-chevron-right-circle'></i></label>
                                                </div>
                                                <div class="photo"><img src="img/items/porte.png" alt=""></div>
                                                <div class="management">
                                                    <button><a href="?theme=<?=$color?>&amp;action=on&amp;nom=19">OUVRIR</a></button>
                                                    <button><a href="?theme=<?=$color?>&amp;action=off&amp;nom=19">FERMER</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="item eclairage">
                                <div class="title"><h1>Volets</h1></div>
                                <div class="photo"><img src="img/items/volets.png" alt=""></div>
                                <div class="bouton">
                                    <h4>Eclairage</h4>
                                    <div class="infoContent">
                                        <input type="checkbox" id="infoSix" class="infoSix">
                                        <label for="infoSix" class=infoButton><i class='bx bx-info-circle'></i></label>
                                        <div class="infoExtend">
                                            <label for="infoSix"><div class="left"></div></label>
                                            <div class="right">
                                                <div class="head">
                                                    <div class="title"><h4>Volets</h4></div>
                                                    <label for="infoSix"><i class='bx bxs-chevron-right-circle'></i></label>
                                                </div>
                                                <div class="photo"><img src="img/items/volets.png" alt=""></div>
                                                <div class="management">
                                                    <button><a href="?theme=<?=$color?>&amp;action=on&amp;nom=21">OUVRIR</a></button>
                                                    <button><a href="?theme=<?=$color?>&amp;action=off&amp;nom=21">FERMER</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item eclairage">
                                <div class="title"><h1>Lumières Interieures</h1></div>
                                <div class="photo"><img src="img/items/switch.png" alt=""></div>
                                <div class="bouton">
                                    <h4>Eclairage</h4>
                                    <div class="infoContent">
                                        <input type="checkbox" id="infoSept" class="infoSept">
                                        <label for="infoSept" class=infoButton><i class='bx bx-info-circle'></i></label>
                                        <div class="infoExtend">
                                            <label for="infoSept"><div class="left"></div></label>
                                            <div class="right">
                                                <div class="head">
                                                    <div class="title"><h4>Lumières Interieures</h4></div>
                                                    <label for="infoSept"><i class='bx bxs-chevron-right-circle'></i></label>
                                                </div>
                                                <div class="photo"><img src="img/items/switch.png" alt=""></div>
                                                <div class="management">
                                                    <button><a href="?theme=<?=$color?>&amp;action=on&amp;nom=23">ALLUMER</a></button>
                                                    <button><a href="?theme=<?=$color?>&amp;action=off&amp;nom=23">ETEINDRE</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item eclairage">
                                <div class="title"><h1>Lumières Exterieurs</h1></div>
                                <div class="photo"><img src="img/items/lampadaire.png" alt=""></div>
                                <div class="bouton">
                                    <h4>Eclairage</h4>
                                    <div class="infoContent">
                                        <input type="checkbox" id="infoHuit" class="infoHuit">
                                        <label for="infoHuit" class=infoButton><i class='bx bx-info-circle'></i></label>
                                        <div class="infoExtend">
                                            <label for="infoHuit"><div class="left"></div></label>
                                            <div class="right">
                                                <div class="head">
                                                    <div class="title"><h4>Lumières Exterieurs</h4></div>
                                                    <label for="infoHuit"><i class='bx bxs-chevron-right-circle'></i></label>
                                                </div>
                                                <div class="photo"><img src="img/items/lampadaire.png" alt=""></div>
                                                <div class="management">
                                                    <button><a href="?theme=<?=$color?>&amp;action=on&amp;nom=22">ALLUMER</a></button>
                                                    <button><a href="?theme=<?=$color?>&amp;action=off&amp;nom=22">ETEINDRE</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="separation"></div>
                </div>
        
                <footer><h3>Copyright © 2022-2023. Tous droits réservés à <span>Da Cunha Mathys</span> .</h3></footer>

                <div class="loader-wrapper">
                    <div class="container">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                </div>

                <div id="tempNotif">
                    Température actuelle : <?=$result?>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="script/main.js"></script>
</html>
