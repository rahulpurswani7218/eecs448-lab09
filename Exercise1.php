<html>
<head>
  <title>Exercise 1</title>
</head>
<body>
  <table border ="1">
<?php
    for($i=0; $i<101; $i++){
          echo "<tr>";
          echo "<td>".$i."</td>";
        for($j=1; $j<101; $j++){
            if($i==0){
                $s=($i+1)*$j;
                echo "<td>".$s."</td>";
            }
            else{
            $m=$i*$j;
            echo "<td>".$m."</td>";
            }

        }
    }

?>
</body>

</html>
