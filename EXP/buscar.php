<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
        <title>Respuesta</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" type="text/css" href="css/estiloIngresar.css">
    </head>
    <body>
        <?php

        //DEFINIMOS LAS VARIABLES DESDE EL FORMULARIO
           $textob = $_POST['textoB'];
           $parrafo = $_POST['parrafo'];
           $opcion = $_POST['opcion'];
         

           switch($opcion){
               case 0: //BUSCAR EN TODO EL PARRAFO
                 if(preg_match("/$textob/", $parrafo)) {
                     echo "texto encontrado en el parrafo";
                 }
                 else  {
                     echo "texto no encontrado en el parrafo";
                 } ; break;  


               case 1: //BUSCAR AL INICIO
                if(preg_match("/^$textob/", $parrafo)) {
                    echo "texto encontrado al principio";
                }
                else  {
                    echo "texto no encontrado al principio";
                } ; break;  


               case 2: //BUSCAR AL FINAL
                if(preg_match("/$textob$/", $parrafo)) {
                    echo "texto encontrado al final";
                }
                else  {
                    echo "texto no encontrado al final";
                } ; break;  


               case 3: //INSENSIBLE A MAYUSCULAS

                if(preg_match("/$textob/i", $parrafo)) {
                    echo "texto encontrado en el parrafo";
                }
                else  {
                    echo "texto no encontrado en el parrafo";
                } ; break;


               case 4:
                echo $textob ; break;


               case 5: 
                echo $textob ; break;

               
           }

                
        ?>
    </body>
</html>
