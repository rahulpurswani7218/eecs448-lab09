<?php
    $q1=$_POST["Q1"];
    $q2=$_POST["Q2"];
    $q3=$_POST["Q3"];
    $q4=$_POST["Q4"];
    $q5=$_POST["Q5"];

    $m=0;
    $c=0;

    echo "Question 1: What is the capital of The United States of America? <br>";
    if($q1=="Washington DC"){
        echo "You answered: ".$q1."<br>";
        echo "Correct answer: Washington DC<br><br>";
        $c=$c+1;
    }
    else{
        echo "You answered: ".$q1."<br>";
        echo "Correct answer: Washington DC<br><br>";
    }
    echo "Question 2: What is the national mammal of The United States of America? <br>";
    if($q2=="Bison"){
        echo "You answered: ".$q2."<br>";
        echo "Correct answer: Bison<br><br>";
        $c=$c+1;
    }
    else{
        echo "You answered: ".$q2."<br>";
        echo "Correct answer: Bison<br><br>";
    }
    echo "Question 3: What is the national bird of The United States of America? <br>";
    if($q3=="Bald Eagle"){
        echo "You answered: ".$q3."<br>";
        echo "Correct answer: Bald Eagle<br><br>";
        $c=$c+1;
    }
    else{
        echo "You answered: ".$q3."<br>";
        echo "Correct answer: Bald Eagle DC<br><br>";
    }
    echo "Question 4: What is the national sport of The United States of America? <br>";
    if($q4=="Baseball"){
        echo "You answered: ".$q4."<br>";
        echo "Correct answer: Baseball<br><br>";
        $c=$c+1;
    }
    else{
        echo "You answered: ".$q4."<br>";
        echo "Correct answer: Baseball<br><br>";
    }
    echo "Question 5: How many stars are on the US flag? <br>";
    if($q5=="50"){
        echo "You answered: ".$q5."<br>";
        echo "Correct answer: 50<br><br>";
        $c=$c+1;
    }
    else{
        echo "You answered: ".$q5."<br>";
        echo "Correct answer: 50<br><br>";
    }

    $s = ($c/5)*100;
    echo "Correctly Answered: ".$c."<br>";
    echo "Your Score: <b>".$s."% </b> <br>";
?>
