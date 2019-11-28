ines (30 sloc)  771 Bytes
  
<?php
$i = 1;
$j = 1;
$x = 1;
echo ("How many friends do you have?\n");
$amount = readline();
if (is_numeric($amount)) {
    echo (var_export($amount) . " Friends will fill in their dreams \n");
} else {
    echo (var_export($amount) . " That's not a number, please fill in a number. \n");
    exit();
}
for($i = 1; $i <= $amount; $i++){
    echo "\n What is your name? \n";
    $vrienden = readline();
    echo("How many dreams would you like to fill in? \n");
    $dromen = readline();
    for($j = 1; $j <= $dromen; $j++){
        echo "Which dream would you like to fill in? \n";
        $dingen[$vrienden][$j] = readline();
    }
}
foreach($dingen as $key => $value){
    echo $key . "'s dream is: ";
    for($x = 1; $x <= $amount; $x++){
        print($value[$x]);
    }
    echo (PHP_EOL . PHP_EOL);
}  
?>