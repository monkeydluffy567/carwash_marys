<?php

/*if ($viene_de_controller){

    $logo='../views/css/logo.png';

}else {
    $logo='views/css/logo.png';
    
}*/

class encabezado
{
    private $titulo;

    function encabezado($title)
    {
        $this->titulo = ucwords($title);
    }
    public function mostrarEncabezado()
    {
        ?>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title><?php echo $this->titulo; ?></title>
            <link rel="stylesheet" href="../views/css/estilos.css">
            <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        </head>

        <body>
            <div id="general">

                <div id="cont">                    
                        <img class='logo' src="../views/css/logo.png" >                   
                </div>


        <?php

            }
        }
        ?>