<?php
//Светлаковой УВ 2-ПМИ
// php-docker.local:8080

//1.Регулярные выражения-------------------------------------

//a. Напишите регулярку, которая найдет строки 'abba', 'adca',
//'abea' по шаблону: буква 'a', два любых символа, буква 'b'.
$str = 'ahb acb aeb aeeb adcb axeb';
$regexp = "/a[a-z]{2}b/i";
$matches = array();
$count = preg_match_all($regexp, $str, $matches);
echo "Найдено ссылок:  ($count)\n";
var_dump($matches);
echo "<br>";
//b. Дана строка с целыми числами 'a1b2c3'. С помощью
//регулярки преобразуйте строку так, чтобы вместо этих
//чисел стояли их кубы.
$str1 = 'a1b2c3';
$regexp1 = "/[0-9]/";
$matches1 = array();
$count1 = preg_match_all($regexp1, $str1, $matches1);
echo "Найдено цифр:  ($count1)\n";
var_dump($matches1);
//тут я разбиваю строку по рег.выражению
// чтобы отделить числа и возвести их в квадрат
$keywords = preg_split($regexp1, $str1);
$arr = array();
foreach ($matches1[0] as &$i) {
    $in = intval($i);
    array_push($arr, pow($in,2));
}
$final_str = array();

for ($i = 0; $i < sizeof($keywords)-1; $i++) {
    array_push($final_str, "$keywords[$i]" . "$arr[$i]");
}

echo " <br>\nResult: ";
foreach ($final_str as &$i) {
    echo  $i;
}

//2.Форма. Сессии и Куки----------------------------------

//a. Дан текстареа и кнопка. В текстареа вводится текст. По
//нажатию на кнопку выведите количество слов и количество
//символов в тексте

//b. На одной странице с помощью формы спросите у
//пользователя фамилию, имя и возраст. Запишите эти данные
//в сессию. При заходе на другую страницу выведите эти
//данные на экран.

//c. На одной странице с помощью формы спросите у
//пользователя имя, возраст, зарплату и еще что-нибудь.
//Запишите эти данные в одну переменную сессии в виде
//массива. При заходе на другую страницу переберите
//сохраненные данные циклом и выведите каждый элемент
//массива в своем теге li тега ul.