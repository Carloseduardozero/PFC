<?php

session_start();

if(!isset($_SESSION['senha'])){
  header("location: ../View/index.php");
}

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="./estilo/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <input type="checkbox" id="check">
        <label id="icone" for="check"><img src="../img/icone.png"></label>
                    <nav>
                        <ul>         
                        <li><a href="inicio.php"><div class="link"><img src="../img/hom.png" width="60px" height="45px">Inicio</div></a></li>
                        <li><a href="materiais.php"><div class="link"><img src="../img/mat.png" width="38px" height="38px">  Materiais e Normas</div></a></li>
                        <li><a href="documentos.php"><div class="link"><img src="../img/doc.png" width="38px" height="38px">  Meus Documentos</div></a></li>
                        <li><a href="documentox.php"><div class="link"><img src="../img/reverse.png" width="38px" height="38px">  Importar e Exportar</div></a></li>
                        <li><a href="lixeira.php"><div class="link"><img src="../img/lix.png" width="38px" height="38px">  Lixeira</div></a></li>
                        <li> <a href="index.php"><div class="link"><img src="../img/out.png" width="38px" height="38px">  Sair</div></a></li>
                        </ul>
                    </nav>
    <center>
        <div class="barra">
            <img src="./../img/DZ.png" width="250px" height="70px">
        </div>
    </center>
     <div class="fundao">
        <div class="mat">
            <l href="Inicio.php"><img src="./../img/past.png" width="150px" height="200px">DOCUMENTOS</l>
            <m href="Documentox"><img src="./../img/GERE.png" width="150px" height="160px">GERENCIA</m>
        </div>
    </div>
    <center>
    <div class="barraZ">
        <x>Docszar 2019 Licensed</x>
    </div>
    </center> 
        <?php
        // put your code here
        ?>
    </body>
</html>
