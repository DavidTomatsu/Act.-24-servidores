<html>
  <head>
    <title>PHP Test</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="container">
    <div id="day"></div>
    <div id="date"></div>
    <CENTER>
      <font face="Verdana" size=5>
  <?php
$dia = date("4");
switch ($dia) {
    case "1":
    echo "Hoy es Domingo";
    break;
    case "2":
    echo "Hoy es lunes";
    break;
    case "3":
    echo "Hoy es martes";
    break;
    case "4":
    echo "Hoy es miércoles";
    break;
    case "5":
    echo "Hoy es jueves";
    break;
    case "6":
    echo "Hoy es viernes";
    break;
    case "7":
    echo "Hoy es sábado";
    break;
    default:
    echo "Entre lunes y domingo:".$dia;
}
?>
      </font>
    </CENTER>
      </div>
  </body>
</html>