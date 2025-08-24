<?php
// 1. Area and Perimeter of a Rectangle
$length = 10;
$width = 5;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "1. Rectangle Area: $area, Perimeter: $perimeter";
?>
<br>
<br>
<?php 
// 2. VAT Calculation
$amount = 1000;
$vat = $amount * 0.15;
echo "2. VAT on $amount is: $vat";
?>
<br>
<br>
 <?php
// 3.My given number is Odd or Even
$number = 15;
if ($number % 2 === 0) 
    {
    echo "3. $number is Even";
    } 
else {
    echo "3. $number is Odd";
}
?>
<br>
<br>
<?php 
// 4. Largest of Three Numbers
$a = 12; 
$b = 205; 
$c = 9;
if ($a >= $b && $a >= $c) {
   echo "4. Largest number is: $a";
} elseif ($b >= $a && $b >= $c) {
   echo "4. Largest number is: $b";
} else {
   echo "4. Largest number is: $c";
}
?>
<br>
<br>
<?php 
// 5. Odd numbers between 10 to 100
echo "5. Odd numbers between 10 and 100:<br>";
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i , " ";
    }
}
?>
<br>
<br>
<?php 
// 6. Search an element in an array
$arr = array(5, 10, 15, 20, 25);
$search = 15;
$found = false;
$length = count($arr); 

for ($i = 0; $i < $length; $i++) { 
    if ($arr[$i] == $search) {      
        $found = true;
        break;                     
    }

}
if ($found) {
    echo "6. $search found in the array";
} else {
    echo "6. $search not found in the array";
}
?>
<br>
<br>
<?php 
// 7. Print Shapes
echo "7.<br>";
 
// star
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";
 
// numbers
for ($i = 3; $i >= 1; $i--) {   
    $num = 1;                  
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }
    echo "<br>";
}
echo "<br>";
 
// letter
$char = 65; // we know ascii value in dec of 'A' is 65
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr($char) . " ";
        $char++;
    }
    echo "<br>";
}
?>
 