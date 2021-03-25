<?php



	//1.1
$z = 5;
$x = 7;
$c = $z + $x;
$v = $z * $x;
echo $c;
echo " ";
echo $v;

	//1.2
$z = 4;
$x = 6;
echo pow($z, 2) + pow($x, 2);

	//1.3
$z = 3;
$x = 5;
$c = 8;
echo ($z + $x + $c)/3;

	//1.4
$x = 2;
$y = 6;
$z = 9;
echo ($x + 1)*4 + 2*($z + 2*pow($x, 2) + pow($y, 2));

	//1.5
$a = 4;
$b = 8;
$c = 3;
echo ($a + $b)/$c;
echo " ";
echo ($a + $c)/$b;
echo " ";
echo ($b + $c)/$a;

	//1.6
$x = 475;
$z = $x % 10;
$c = intdiv($x , 100);
$v = intdiv($x % 100 , 10) ;
echo $z + $c + $v;



	//2.1
$z = 15;
if ($z > 10) {
	$z = $z - 100;
} 
else {
	$z = $z - 30;
}
echo $z;

	//2.2
$z = 8;
if ($z % 2 == 0) {
	$z = $z/2;
} 
else {
	$z = $z*3;
}
echo $z;

	// 2.3
$z = 68;
if ($z > 50) {
	echo pow($z, 2);
} elseif ($z > 10 && $z < 30) {
	echo 0;
} else {
	echo "Ошибка";
}

	//2.4
$a = 15;
$b = 4;
if ($a > $b) {
	echo $a;
} 
else {
	echo $b;
}

	//2.5
$a = 10;
$b = 110;
if (($b - $a) == 100){
  echo "Да";
  }
  else{
  echo "Нет";  
    }

	//2.6
$a = 57;
$b = 80;
if (($a - 20) <= $b) {
	echo "Да";
} elseif ($a >= ($b - 20) {
	echo "Да";
} else {
	echo "Нет";
}

	//2.7
$x = 475;
$z = $x % 10;
$c = intdiv($x , 100);
$v = intdiv($x % 100 , 10) ;
if ($z > $c && $z > $v) {
	if ($c > $v){
	echo "$z$c$v";
}
	else{
	echo "$z$v$c";
}}
if ($c > $z && $c > $v) {
	if ($z > $v){
	echo "$c$z$v";
}
	else{
	echo "$c$v$z";
}}
if ($v > $c && $v > $z) {
	if ($c > $z){
	echo "$v$c$z";
}
	else{
	echo "$v$z$c";
}}


	//2.8
if ($z == 1) {
	echo "Понедельник";
}
if ($z == 2) {
	echo "Вторник";
}
if ($z == 3) {
	echo "Среда";
}
if ($z == 4) {
	echo "Четверг";
}
if ($z == 5) {
	echo "Пятница";
}
if ($z == 6) {
	echo "Суббота";
}
if ($z == 7) {
	echo "Воскресенье";
}

	//2.9
if ($z > 80) {
	echo "Здравствуйте, уважаемый";
}
else {
	echo "Успехов!";
}

	//3.1
$mas[0] = "Привет, ";
$mas[1] = "мир";
$mas[2] = "!";
echo $mas[0].$mas[1].$mas[2];

	//3.2
$mas[0] = "Привет, ";
$mas[1] = "мир";
$mas[2] = "!";
$text = $mas[0].$mas[1].$mas[2];
echo $text;

	//3.3
$mas[0] = "Привет, ";
$mas[1] = "мир";
$mas[2] = "!";
$mas[0] = "Пока, ";
echo $mas[0].$mas[1].$mas[2];

	//3.4
$mas = [1, '', 2, '', '', 3];
unset($mas[1]);
unset($mas[3]);
unset($mas[4]);
echo $mas[1];

	//3.5
$mas = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo $mas['Коля'];

	//3.6
<?php
$arr = [1, 2, 3, 4, 5];
?>

<?php
$arr[0] = 1;
$arr[1] = 2;
$arr[2] = 3;
$arr[3] = 4;
$arr[4] = 5;
?>

	//3.7
$mas = ['a' => 1, 'b' => 2, 'c' => 3];
echo $mas['b'];

	//3.8
$mas = ['a' => 1, 'b' => 2, 'c' => 3];
$x = $mas["a"] + $mas["b"] + $mas["c"];
echo $x;

	//3.9
$z = [1 => 'Понедельник', 2 => 'Вторник', 3 => 'Среда', 4 => 'Четверг', 5 => 'Пятница', 6 => 'Суббота', 7 => 'Воскресенье'];
echo $z[4];



	//4.1
$arr = ['sp'=>['azul', 'dsad','sda'],
	 'en'=>["blue", 'red','green'],];
echo $arr['sp'][0];

	//4.2
$arr = ['a','b','c'];
var_dump($arr);

 	//4.3
$mas = [2, 8, 5, 3];
$a = $mas[0] * $mas[1] + $mas[2] * $mas[3];
echo $a;

	//4.4
$arr=[];
$z = 0;
for ($i=1; $i <= 5; $i++) { 
	$arr[$z ++]=$i;
}

	//4.5
$arr = [
'cms'=>['joomla', 'wordpress', 'drupal'],
'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
]
echo $arr['cms'][0].$arr['cms'][2];

	//4.6
$mas = ['ru'=>[1 =>'Понедельник',2 =>'Вторник' , 3 =>'Среда' , 4 =>'Четверг' , 5 =>'Пятница' , 6 =>'Суббота' , 7 =>'Воскресенье'],
'en'=>[1 =>'Monday',2 =>'Tuesday' , 3 =>'Wednesday' , 4 =>'Thursday' , 5 =>'Friday' , 6 =>'Saturday' , 7 =>'Sunday']];
echo $mas['ru'][6].'<br>'. $mas['en'][3];

	//4.7
$lang = 'ru';
$day = 3;
echo $mas[$lang][$day];



	//7.1
$z = 'php';
echo strtoupper($z);

	//7.2
$z ="PHP";
echo strtolower($z);
	
	//7.3
$z="london";
echo ucfirst($z);
	
	//7.4
$z="London";
echo lcfirst($z);;
	
	//7.5
$z="london is the capital of great britain";
echo ucwords($z);
	
	//7.6
$z="LONDON";
$z=strtolower($z);
$z=ucfirst($z);
echo $z;
	
	//7.7
$z="html css php";
echo strlen($z);
	
	//7.8
$password="45783436";
if (strlen($password) > 5 && strlen($password) < 10) {
echo 'пароль подходит';
} 
else{
echo 'нужно придумать другой пароль';
}

	//7.9
$z="html css php";
echo substr($z, 0, 4).'<br>';
echo substr($z, 5, 3).'<br>';
echo substr($z, 9, 3).'<br>';
	
	//7.10
echo substr($z, strlen($z) - 3, 3);
	
	//7.11
$z='http://';
if (substr($z, 0, 7) == 'http://') {
echo 'Да';
} 
else {
echo 'Нет';
}
	
	//7.12
$z='http://';
if ( substr($z, 0, 7) == 'http://' || substr($z, 0, 8) == 'https://') {
echo 'Да';
} 
else {
echo 'Нет';
}

	//7.13
$z='foto.png';
if substr($z, strlen($z) - 4, 4) == '.png') {
	echo 'Да';
} 
else {
	echo 'Нет';
}

	//7.14
$z='foto.png';
if (substr($z, strlen($z) - 4, 4) == '.png' || substr($z, strlen($z) - 4, 4) == '.jpg') {
	echo 'Да';
} 
else {
	echo 'Нет';
}

	//7.15
$z='h567576h4';
if(strlen($z) > 5)
	{
		$str = substr($z, 0, 5);
		echo $str.'...';
	}

	//7.16
$z='31.12.2013';
$z=str_replace('.', '-', $z);
echo $z;

	//7.17
$z = 'bacbacb';
$z=str_replace('a', '1', $z);
$z=str_replace('c', '3', $z);
$z=str_replace('b', '2', $z);
echo $z;

	//7.18
$z='1a2b3c4b5d6e7f8g9h0';
for ($i=0; $i <= 9; $i++){
$z=str_replace($i, '', $z);
}
echo $z;

	//7.19
$z='bacbacb';
$z=strtr($z, 'a', '1');
$z=strtr($z, 'b', '2');
$z=strtr($z, 'c', '3');
echo $z;

	//7.21
$z = '30g5y07qg5my0'
echo substr_replace($z, '!!!', 4, 5);

	//7.22
echo strpos('abc abc abc', 'b');

	//7.23
echo strrpos('abc abc abc', 'b');

	//7.24
echo strpos('abc abc abc', 'b', 3);

	//7.25
$z = 'aa aa aa aa';
$c = strpos($z, ' ');
echo strpos($z, ' ', ++$c);
  
$v = strpos($z, '.');
$x = strpos($z, '.', ++$v);
if ($x == $v ){
  echo 'есть';
  }
   else{
    echo 'Нет';
    }

	//7.26
$z = 'http://fgdfgd';
if (substr($z, 0, 7) == 'http://'){
echo 'да';
}
else {
  echo 'нет';
  }

	//7.27
$z = 'html css php';
$x = explode(' ', $z);

	//7.28
$z = ['html', 'css', 'php'];
	echo implode(', ', $z);

	//7.29
$data="2016-12-31";
echo substr($data, 8, 3). '.';
echo substr($data, 5, 2). '.';
echo substr($data, 0, 4);

	//7.30
$z = '1234567890';
$x = str_split($z, 2);
echo implode(' ', $x);

	//7.31
$z = '1234567890';
$x = str_split($z);
echo implode(' ', $x);

	//7.32
$z = '1234567890';
$x = str_split($z, 2);
echo implode('-', $x);

	//7.33
$z = ' 1234567890 ';
echo trim($z);

	//7.34
$z = '/php/';
echo trim($z,'/');

	//7.35
$z = 'слова слова слова.';
echo trim($z, '.').'.';

	//7.36
echo strrev('12345');

	//7.37
$z = 'oto';
$x = strrev('oto');
if ($z == $x){
	echo 'является';
}

	//7.38
echo str_shuffle('является');

	//7.39
$z = 'abcdefghiklmnopqrstvxyz';
$x = str_shuffle($z);
echo substr($x, 0, 6);



	//7.40
for ($i = 1; $i<6; $i++)
echo str_repeat($x, $i);
echo "<br>";

	//7.41
for ($i = 2; $i<10; $i++)
echo str_repeat($i, $i);
echo "<br>";

	//7.42
	//Работа с strip_tags и htmlspecialchars

	//7.43
$z = 'html, <b>php</b>, js';
echo strip_tags($z);

	//7.44
$str = 'html, <i><b>php</b></i>, js';
echo strip_tags($str, '<b><i>');

	//7.45
echo htmlspecialchars('html, <i><b>php</b></i>, js');

	//7.46
$z = 'ab–cd–ef';
echo strstr($z, '–');



	//8.
	//Применение строк в PHP

	//8.1	
$z = 'london boston chicago'; 
$x = explode(" ", $z); 
sort($x); 
$x = implode(" ", $x); 
echo $x;

	//8.3
$c = explode(' ', '12345 67890');
echo $x = strrev($c[0]), ' ' , $x = strrev($c[1]);

	//8.4
$z = [3, 56, 26, 636, 366, 33];
foreach ($z as $val){
	if (strpos($val, '3') !== false){
		echo $val.'<br>';
	}
}

	//8.5
$z = [3, 56, 26, 636, 366, 33];
	$x = implode('',$z);
	echo substr_count($x, 3);

	//8.6
$z = '12345678';
$x = str_split($z, 2);
$k = 0;
for ($i = 0; i <= count($x); i+1){
$k = $k + $x[i];
}
echo $k;



?>