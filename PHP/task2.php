<?php
$principal =100000;
$rate = 0.50;
$time = 10;
$interest =($principal*$rate*$time)/100;
echo "1 .Simple Interest = $interest";
?>
<br>
<br>
<?php
$a=5;
$b=6;
echo "2.Before Swap : a = $a, b =$b <br>";

$a= $a+ $b;
$b =$a-$b;
$a = $a -$b;
echo "  After Swap : a = $a, b =$b <br>";
?>
<br>
<?php
$year = 2025;
if (($year % 4 == 0 && $year % 100 != 0)||($year % 400 == 0)) {
    echo " 3. $year is a Leap Year <br>";
} else {
    echo " 3. $year is NOT a Leap Year <br>";
}
?>
<br>
<?php
$num = 5;
$fact = 1;
for ($i = 1; $i <= $num; $i++) {
    $fact *= $i;
}
echo " 4. Factorial of $num = $fact";
?>
<br>
<?php
echo "5. Prime numbers between 1 and 50:<br>";
for ($i = 2; $i <= 50; $i++) {
    $isPrime = true;
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        echo "$i ";
    }
}
?>
<br>
<br>
<?php
echo"6.Star:<br>";
for ($i = 5; $i >= 1; $i--) {                  

    for ($j = 1; $j <= $i; $j++) {
        echo  "*";
    }
    echo "<br>";
}
echo "Number:<br>";
for ($i = 1; $i <= 4; $i++) {
 $num =1;
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }
     echo "<br>";
}

echo "<br>";
 
echo "Alphabet:<br>";
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $i) . " ";
    }
    echo "<br>";
}
?>


