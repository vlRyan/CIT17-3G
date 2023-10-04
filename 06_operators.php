<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Types</title>
</head>
<body>
    <?php 
        $a = 10;
        $b = 5;
        $sum = $a + $b;
        echo "$sum<br>";    
        $difference = $a - $b; 
        echo "$difference<br>"; 
        $product = $a * $b;
        echo "$product<br>";   
        $quotient = $a / $b;
        echo "$quotient<br>"; 
        $remainder = $a % $b;
        echo "$remainder<br>";  

        $x = 10;
        $y = 5;
        $isEqual = $x == $y;  
        echo "$isEqual<br>"; 
        $isNotEqual = $x != $y; 
        echo "$isNotEqual<br>"; 
        $isGreater = $x > $y;  
        echo "$isGreater<br>"; 
        $isLess = $x < $y;
        echo "$isLess<br>";   
        
        $p = true;
        $q = false;
        $andResult = $p && $q;
        $orResult = $p || $q;
        $notResult = !$p;

        echo "AND Result: " . ($andResult ? "true" : "false") . "\n";  
        echo "OR Result: " . ($orResult ? "true" : "false") . "\n";   
        echo "NOT Result: " . ($notResult ? "true" : "false") . "\n"; 

        $a = 10;
        $b = 5;
        $a += $b;
        $a -= $b;
        $a *= $b;
        $a /= $b;
        echo "a: $a\n";

        $firstName = "John";
        $lastName = "Doe";
        $fullName = $firstName . " " . $lastName;

        echo "Full Name: $fullName\n";
    ?>
</body>
</html>