<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 4</title>
</head>
<body>
    <?php 
    $a = 10;
    $b = 10.5;
    $c = "Hello";
        echo "<h1> Type of a: ".gettype($a)."</h1>";
        echo "<h1> Type of b: ".gettype($b)."</h1>";
        echo "<h1> Type of c: ".gettype($c)."</h1>";


        function copyright() {
            echo "&copy ".date("Y");
            echo "<p> Powered by Digital School </p>";
        }

        function maximum ($x, $y) {
            if($x > $y)
                return $x;
            else
                return $y;
        }
        $a = 10;
        $b = 20;
        echo "<p>Numeri me i madh nga $a dhe $b eshte </p>".maximum($a,$b);


        function divisible($a) {
            if($a%2==0){
                return "$a is even";
            } else {
                return "$a is odd";
            }
        }

        print_r(divisible(7)."<br>");
        print_r(divisible(14)."<br>");
        print_r(divisible(30)."<br>");

        function nrbreak ($n) {
            for($i=0; $i<=$n; $i++)
                echo "<br>";
        }
        echo "<hr>";
        nrbreak(3);
        echo "<h2>Example 2:</h2>";
        function calculator ($a, $b, $op) {
            switch($op){
                case '+': return $a+$b; break;
                case '-': return $a-$b; break;
                case '*': return $a*$b; break;
                case '/': return $a/$b; break;
                default: return "Operator i gabuar !";
            }
        }

        echo calculator(10,5,'*');

        nrbreak(2);

        $sports = ['Footbol', 'Basketbol', 'Handbol'];
        echo $sports[0];
        nrbreak(2);
        echo end($sports);
        nrbreak(2);
        $length = count($sports);
        for($i=0; $i<$length;$i++) {
            echo $sports[$i];
            echo ", ";
        }
        nrbreak(2);
        var_dump($sports);
    ?>

    <footer>
        <?php 
        nrbreak(7);
        copyright(); ?>
    </footer>
</body>
</html>