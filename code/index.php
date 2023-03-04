<?php
//Светлаковой УВ 2-ПМИ
//1
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:
$order =& $very_bad_unclear_name;
$order = "french fries XL";
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";
//2
$a = 10;
echo "\nCurrent number is: $a";
echo "\n";
$b = 5.67;
echo "\nCurrent number is: $b";
echo "\n12";
$last_month = 1187.23;
$this_month = 1089.98;
echo "\nDifference: " . ($last_month - $this_month);
//11
$languages = Array('Ruby', 'Python', 'JS', 'C++');
$num_languages = sizeof($languages);
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "\nDays per language: $days_per_language";
//12
echo "\n8^2 = " . (8**2);
//13
$my_num = 666;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "\nAnswer = $answer";
//14
$a = 10;
$b = 3;
echo "\na%b = " . ($a % $b);
if ($a % $b == 0) {
    echo "\nДелится! Результат деления: " . ($a / $b);
} else {
    echo "\nДелится с остатком! остаток: " . ($a % $b);
}
$st = pow(2, 10);
echo sqrt(245);
$array = Array(4, 2, 5, 19, 13, 0, 10);
foreach ($array as $value) {
    $value = sqrt($value);
    echo "\n $value";
}
$first = sqrt(379);
for ($i = 1; $i <=3; $i++) {
    $res = round($first, $i);
    echo "\nResult:  $res";
}
$second = sqrt(587);
$array = Array('floor' => floor($second), 'ceil' => ceil($second));
echo "\nCeil: " . $array['ceil'];
$array = Array( 4, -2, 5, 19, -130, 0, 10);
echo "\nMin: ". min($array);
echo "\nMax: ". max($array);
echo "\nRand number: ". rand(1, 100);
$array = Array();
for ($i = 0; $i <10; $i++) {
    array_push($array, rand(1, 100));
}
for ($i = 0; $i <10; $i++) {
    echo "\n" . $i . $array[$i];
}
echo "\nABS: " . abs($a - $b);
$array1 = Array( 1, 2, -1, -2, 3, -3);
$array2 = Array();
echo "\n{";
foreach ($array1 as $value) {
    array_push($array2, abs($value));
    echo "\n($value)";
}
echo "\n}";
echo "\n{";
foreach ($array2 as $value) {
    echo "\n($value)";
}
echo "\n}";
$c = 30;
$array = Array();
for ($i=1; $i <= $c; $i++) {
   if ($c % $i == 0) {
       array_push($array, $i);
   }
}
echo "\nDividers: ";
foreach ($array as $value) {
    echo "\n$value,";
}
$array = Array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$sum = 0;
$k = 0;
foreach ($array as $value) {
    $sum += $value;
    $k+=1;
    if ($sum > 10) {break;}
}
echo "\nK = ". $k;
//15
function printStringReturnNumber() {
    echo "\nString";
    return 143;
}
$my_num = printStringReturnNumber();
echo "\nMyNum = $my_num";
//16
function  increaseEnthusiasm($string) {
    return "\n$string!";
}
echo increaseEnthusiasm("I'm tired, help");
function repeatThreeTimes($string){
    return "$string" . "$string" . "$string";
}
echo repeatThreeTimes("\nHelp");
echo repeatThreeTimes(increaseEnthusiasm("☮︎"));
function cut($string, $n = 10) {
    return substr($string, 0, $n);
};
function output($array, $c = 0) {
    if($c < sizeof($array)) {
        echo $array[$c];
        $c++;
        output($array, $c);
    }
}
echo output($array);
function sumOfNumber($i) {
    $sum = 0;
    $d = $i;
    while ($d > 0) {
        $sum += $d % 10;
        $d = floor($d/10);
    }
    echo "\n$sum";
    if ($sum > 9) {
        sumOfNumber($sum);
    } else {
        return $sum;
    }
}
echo sumOfNumber(1239);
//17
$arr = Array();
for ($i = 0; $i < 10; $i++) {
    $arr[$i] = str_repeat("x", $i+1);
}
//
function arrayPrint($array = Array()) {
    echo "\n{";
    foreach ($array as $value) {
        echo "\n($value)";
    }
    echo "\n}";
}
//
function arrayFill($elem, $n){
    $array = Array();
    for ($i = 0; $i < $n; $i++) {
        array_push($array, $elem);
    }
    return $array;
}
echo arrayPrint(arrayFill("lol", 5));
$array = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($array as $values) {
    foreach ($values as $value) {
        $sum += $value;
    }
}
echo "\nSumm: $sum";
$array =  [2,5,3,9];
$result = (($array[0]*$array[1])+($array[2]*$array[3]));
echo "\nresult: $result";
$user = Array("name" => "Ivan", "surname" => "Ivanov", "patronymic" => "Ivanovich");
$date = Array("year" => "2000", "month" => "01", "day" => "01");
echo "\nYYYY:MM:DD: ". $date["year"] . "." . $date["month"] . "." . $date["day"];
$arr = ['a', 'b', 'c', 'd', 'e'];
echo "\nSize of array: ".sizeof($arr);
echo "\nLast: ".$arr[sizeof($arr)-2];
echo "\nPenult: ".$arr[sizeof($arr)-3];
//18
function sumMoreThanTen($a, $b) {
    if ($a + $b > 10) {
        return true;
    } else{return false;}
}
function isEqual($a, $b) {
    if ($a == $b) {
        return true;
    } else{return false;}
}
$test = 0;
echo $test == 0 ? "верно" : '';
$age = 20;
function sumOfNumber2($i) {
    $sum = 0;
    $d = $i;
    while ($d > 0) {
        $sum += $d % 10;
        $d = floor($d/10);
    }
    return $sum;

}
if ($age < 10) {
    echo "\nAge is less than 10";
} else if ($age > 99) {
    echo "\nAge is more than 99";
} else {
    $sum = sumOfNumber2($age);
    echo $sum <= 9 ? "\nСумма цифр однозначна" : "\nСумма цифр двузначна";
}
//19
$arr = Array();
for ($i = 0; $i < 20; $i++) {
    $arr[$i] = str_repeat("x", $i+1);
}
function pyramidPrint($arr) {
    echo "<br>";
    foreach ($arr as $value) {
        echo "<br>$value";
    }
    echo "<br>";
}
echo pyramidPrint($arr);
//20
$array = [1,2,3,4,5,6];
echo "\nAverage: " . (array_sum($array)/sizeof($array));
echo "\nSum of numbers from 1 to 100: " . array_sum(range(0, 100));
echo "\nSQRT from array: " . arrayPrint(array_map("sqrt", $array));
$keys = range('a', 'z');
$arr = range(1, 26);
echo "\nCombine: " . arrayPrint(array_combine($keys, $arr));
$string = '1234567890';
$numbers = str_split($string, 2);
echo "\nSumm: ". array_sum($numbers);