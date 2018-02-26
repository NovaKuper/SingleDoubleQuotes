<?
$str_double = "Тестовая строка с двойными кавычками";
$str_single = 'Тестовая строка с одинарными кавычками';

$val = 5;

//более чем одна конкатинация
$start_single = microtime(true);
for ($i = 0; $i < 1000000; $i++)
{
	$text = $val.'Тестовая строка с одинарными кавычками'.$val.'  '.$val;
}
$time_single = (microtime(true) - $start_single);

$start_double = microtime(true);
for ($i = 0; $i < 1000000; $i++)
{
	$text = "$val Тестовая строка с двойными кавычками $val  $val";
}
$time_double = (microtime(true) - $start_double);

echo "</br>".$time_single."</br>";
echo "</br>".$time_double."</br>";
echo "--------------------------------------------------------------";

//одна конкатинация
$start_single1 = microtime(true);
for ($i = 0; $i < 1000000; $i++)
{
	$text = $val.'Тестовая строка с одинарными кавычками';
}
$time_single1 = (microtime(true) - $start_single1);

$start_double1 = microtime(true);
for ($i = 0; $i < 1000000; $i++)
{
	$text = "$val Тестовая строка с двойными кавычками";
}
$time_double1 = (microtime(true) - $start_double1);

echo "</br>".$time_single1."</br>";
echo "</br>".$time_double1."</br>";
echo "--------------------------------------------------------------";

//без конкатенации
$start_single2 = microtime(true);
for ($i = 0; $i < 1000000; $i++)
{
	$text = 'Тестовая строка с одинарными кавычками';
}
$time_single2 = (microtime(true) - $start_single2);

$start_double2 = microtime(true);
for ($i = 0; $i < 1000000; $i++)
{
	$text = "Тестовая строка с двойными кавычками";
}
$time_double2 = (microtime(true) - $start_double2);

echo "</br>".$time_single2."</br>";
echo "</br>".$time_double2."</br>";
?>