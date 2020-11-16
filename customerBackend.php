<html>
<head>
  <title>Exercise 3</title>
  <link href="style.css" rel="stylesheet">
  <h1>Welcome to Stationery Web Store</h1>
</head>
<body>
  <table border ="1">
<?php
    $pass= $_POST["Password"];
    $q1=$_POST["Pens"];
    $q2=$_POST["Pencils"];
    $q3=$_POST["Erasers"];
    $q4=$_POST["Sharpers"];
    $q5=$_POST["Q1"];

    $a=$q1 * 5;
    $b=$q2 * 4;
    $c=$q3 * 3;
    $d=$q4 * 2;
    $e=$a+$b+$c+$d+$q5;

    echo "<h2>Your Password is: ".$pass."</h2>";
    echo "<tr>";
    echo "<td><h3><b>Item</h3></b></td>";
    echo "<td><h3><b>Quantity</h3></td>";
    echo "<td><h3><b>Rate</h3></td>";
    echo "<td><h3><b>Sub-Total</h3></td>";

    echo "<tr>";
    echo "<td><b><h3>Pens</h3></b></td>";
    echo "<td><h3>".$q1."</h3></td>";
    echo "<td><h3>$5</h3></td>";
    echo "<td><h3>$".$a."</h3></td>";

    echo "<tr>";
    echo "<td><b><h3>Pencils</b></h3></td>";
    echo "<td><h3>".$q2."</h3></td>";
    echo "<td><h3>$4</h3></td>";
    echo "<td><h3>$".$b."</h3></td>";

    echo "<tr>";
    echo "<td><h3><b>Erasers</b></h3></td>";
    echo "<td><h3>".$q3."</h3></td>";
    echo "<td><h3>$3</h3></td>";
    echo "<td><h3>$".$c."</h3></td>";

    echo "<tr>";
    echo "<td><h3><b>Sharpners</b></h3></td>";
    echo "<td><h3>".$q4."</h3></td>";
    echo "<td><h3>$2</h3></td>";
    echo "<td><h3>$".$d."</h3></td>";

    echo "<tr>";
    echo "<td><h3><b>Shipping</b></h3></td>";
    echo "<td><h3>1</h3></td>";
    echo "<td><h3>".$q5."</h3></td>";
    echo "<td><h3>$".$q5."</h3></td>";

    echo "<tr>";
    echo "<td><h3><b>Total</b></h3></td>";
    echo "<td><h3><b>Cost</b></h3></td>";
    echo "<td><h3><b>is</b></h3></td>";
    echo "<td><h3><b>$".$e."</b></h3></td>";

?>
</body>

</html>
