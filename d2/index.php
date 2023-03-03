<?php
$sports=['Footboll', 'Basketboll', 'Handboll', 'Golf', 'Voleyboll'];



function print_array($array) {
    $length = count($array);
    for($i=0; $i<$length; $i++) {
        echo $array[$i]; echo ", ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays</title>
</head>
<body>
    <?php print_array($sports); ?>
    <h2>After PUSH</h2>
    <?php
    array_push($sports,'Voleyboll');
    print_array($sports); ?>
    <h2>After POP</h2>
    <?php
    array_pop($sports);
    print_array($sports); ?>
    <h2>After UNSHIFT</h2>
    <?php
    array_unshift($sports,'Voleyboll');
    print_array($sports); ?>
    <h2>After SHIFT</h2>
    <?php
    array_shift($sports);
    print_array($sports); ?>
<h2>After SLICE start from index 2</h2>
    <?php
    $output = array_slice($sports,2);
    print_array($output); ?>

<h2>After SLICE start from negative value</h2>
    <?php
    $output = array_slice($sports,-2);
    print_array($output); ?>

<h2>After SLICE start from negative value</h2>
    <?php
    $output = array_slice($sports,1,3);
    print_array($output); ?>

    <hr>
    <h2>Excersize 1:</h2>
    <?php
    $temper = array(25,30,25,26,20,28,25);
    $length = count($temper);
    var_dump(array_sum($temper)/$length);
    ?>

    <h2>2 Dimenzional Arrays  </h2>
    <?php
    $dogs = array(
        array("Chihuahua", "Mexico", 20),
        array("Husky", "Siberia", 15),
        array("Bulldog", "England", 10)
    );

    $cats = [
        ["Chihuahua", "Mexico", 20],
        ["Husky", "Siberia", 15],
        ["Bulldog", "England", 10]
    ];

    for($row=0;$row<3;$row++){
        echo "<p><b>Row number $row </b></p>";
        echo "<ul>";
        for($col=0;$col<3;$col++){
            echo "<li>" . $dogs[$row][$col] . "</li>";
        }
        echo "</ul>";
    }
    ?>
    <h1>Mini Challenge</h1>
    <table border="1">
        <tr>
            <th>Phones</th>
            <th>In Stock</th>
            <th>Sold</th>
        </tr>
        <?php 
        $phones = [
            ["Iphone 14", 20, 10],
            ["Iphone 13", 20, 20],
            ["Iphone 12", 20, 25],
            ["Iphone 11", 20, 40]
        ];

        for($row=0;$row<4;$row++){
            
            echo "<tr>";
            for($col=0;$col<3;$col++){
                echo "<td>" . $phones[$row][$col] . "</td>";
            }
            echo "</tr>";
        }
    
        
        ?>

    </table>
<br>
    <?php

for($i=1;$i<5;$i++){
    for($j=$i;$j<=5;$j++){
        echo "&nbsp";
    }
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br />";
}

for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "&nbsp";
    }
    for($j=$i;$j<=5;$j++){
        echo "*";
    }
    echo "<br />";
}
echo "<br>";
$grade=array(
    "Math" => "3",
    "Art" =>"5",
    "History"=>"4",
    "Music"=>"4"
);
?>
<h2>Associative arrays</h2>
<h3>Grade on math is <?= $grade['Math']; ?></h3>
<h3>Grade on art is <?php echo $grade['Art']; ?></h3>
<h2>ForEach</h2>
<?php
foreach($grade as $subject=> $grade){
    echo "Subject:" . $subject . ", Grade:" . $grade;
    echo "<br>";
}
?>
<h1>
    Example
</h1>

<?php
$username = 'Digital School';                                   // Variable to hold username

$greeting = 'Hello, ' . $username . '.';             // Greeting is 'Hello' + username

$offer = [                                           // Create array to hold offer
    'item'     => 'Chocolate',                       // Item on offer
    'qty'      => 5,                                 // Quantity to buy
    'price'    => 5,                                 // Usual price per pack
    'discount' => 4,                                 // Offer price per pack
];


$offers = [
    ['item'=> 'Chocolate', 'qty'=> 5,'price' => 5,'discount' => 4],
    ['item'=> 'Candy', 'qty'=> 4,'price' => 6,'discount' => 4],
    ['item'=> 'Juice', 'qty'=> 3,'price' => 7,'discount' => 4],
    ['item'=> 'Mint', 'qty'=> 2,'price' => 8,'discount' => 4]
];


?>

<h2>Multi-buy Offer</h2>
<p><?= $greeting ?></p>
<?php

for($i=0;$i<4;$i++)
{
    echo "<p>";
foreach($offers[$i] as $offer=> $value)
{
    echo "$offer: $value, ";
}
echo "</p>";
}

?>

<table border="1">
    <tr>
        <th>$student</th><th>Math</th><th>Art</th><th>History</th><th>Music</th>
    </tr>
<?php
$students=[
    ["Alba","Math" =>"3","Art" =>"4","History" =>"4","Music" =>"4",],
    ["Rinesa","Math" =>"4","Art" =>"3","History" =>"4","Music" =>"4",],
    ["Bulza","Math" =>"5","Art" =>"4","History" =>"4","Music" =>"4",],
    ["Rina","Math" =>"1","Art" =>"4","History" =>"4","Music" =>"4",],
    ["Lea","Math" =>"2","Art" =>"4","History" =>"4","Music" =>"4",],
  ];
  
  for($i=0;$i<5;$i++){
    echo "<tr>";
    foreach($students[$i] as $subject=>$value){
    echo"<td>  $subject: $value, </td>";
  }
  echo "</tr>";
  }

?>
 </table>

</body>
</html>