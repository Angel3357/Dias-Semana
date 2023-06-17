<html>
  <head>
    <title>Dias de la semana</title>
  </head>
  <link rel="stylesheet" type="text/css" media="screen" href="style.css"/>
  <body>
   <?php
    $dia=date("D");
    switch($dia)
    {
    case"Mon";
    echo"<h2>Hoy es Lunes</h2>";
    break;
    case"Tue";
    echo"<h2>Hoy es Martes</h2>";
    break;
    case"Wed";
    echo"<h2>Hoy es Miercoles</h2>";
    break;
    case"Thu";
    echo"<h2>Hoy es Jueves</h2>";
    break;
    case"Fry";
    echo"<h2>Hoy es Viernes</h2>";
    break;
    case"Sat"; 
    echo"<h2>Hoy es Sabado</h2>";
    break;
    case"Sun";
    echo"<h2>Hoy es Domingo</h2>";
    break;
    default;
    echo"Entre lunes y domingo: ".$dia;
    }
    ?> 
  </body>
</html>