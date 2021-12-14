<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="stilo.css">
<meta  http-equiv="Content-Type"  content="text/html;  charset=utf-8">
<meta  name="viewport"  content="width=device-width,  initial-scale=1, shrink-to-fit=no">
<link  href="css/bootstrap.min.css"  rel="stylesheet"/>
<link  href="Estilos.css"  rel="stylesheet"/>
<link rel="stylesheet" href="Estilo.css">
<script  src="js/bootstrap.js"></script>
  <title>Problema</title>
</head>

<body background-color: rgb(196, 196, 14);>
  <form action="" method="post">
    Ingrese primer valor:
    <input type="text" name="valor1">
    <br>
    Ingrese segundo valor:
    <input type="text" name="valor2">
    <br>
    <input type="radio" name="radio1" value="suma">sumar
    <br>
    <input type="radio" name="radio1" value="resta">restar
    <br>
    <input type="radio" name="radio1" value="multiplicar">multiplicar
    <br>
    <input type="radio" name="radio1" value="dividir">dividir
    <br>
    <input type="submit" value="consultar" name="operar" >
  </form>
<?php
if (isset($_REQUEST['operar'])){

  if ($_REQUEST['radio1'] == "suma") {
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es:" . $suma;
  } else if ($_REQUEST['radio1'] == "resta") {
   
      $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
      echo "La resta es:" . $resta;
  }
   else if ($_REQUEST['radio1'] == "multiplicar") {
          $multiplicar = $_REQUEST['valor1'] * $_REQUEST['valor2'];
          echo "La multiplicacion es:" . $multiplicar;
      }else{
          $dividir = $_REQUEST['valor1'] / $_REQUEST['valor2'];
          echo "La divicion es:" . $dividir; 
    }
}
  ?>

</body>

</html>


