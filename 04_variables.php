<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Types</title>
</head>
<body>
    <?php 
        $addNum = 2 + 2;
        echo "$addNum";
        $addNum = 2 + 2;
        echo "$addNum";
        $four =
        2+
        6; 

        print ($four);

        $capital = 67;
        print("Variable capital is $capital<br>");

        $jason = "chopapi";

        echo "<br>$jason";
        
        $weight = 90.35;
        $height = 173;

        if (TRUE) {
            print("This will always print");
        } else {
            print("This will never print");
        };
            
        $my_var = NULL;
        $true_array[49] = "An array element";

        $string_0 = "";

        echo "$string_0";

        $variable = "name";
        $literally = 'My $variable will not print!\\n';
        print($literally);
        $literally = "My $variable will print!\\n";
        print($literally);

        $somevar = 15;
        function addit() {
            GLOBAL $somevar;
            $somevar++;
            print "<br>Somevar is $somevar";
        }
        addit();

        function multiply ($value) {
            $value = $value * 10;
            return $value;
        }
        $retval = multiply (10);
        Print "<br>Return value is $retval\n";

        function keep_track() {
            STATIC $count = 0;
            $count++;
            print $count;
            print " ";
        }
        keep_track();
        keep_track();
        keep_track();
    ?>
</body>
</html>