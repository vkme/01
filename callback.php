<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>callback</title>
</head>

<body>
<?php
// Our closure
$double = function($a) {
    return $a * 2;
};

// This is our range of numbers
$numbers = range(1, 5);

// Use the closure as a callback here to 
// double the size of each element in our 
// range
$new_numbers = array_map($double, $numbers);

print implode(' ', $new_numbers);
?> 
<br />
<?php
$a    = 'car'; // $a is a string
$a[0] = 'eb';   // $a is still a string
echo $a;       // bar
?> 

<br />
<?php
$foo = 10;   // $foo is an integer
$bar = (boolean) $foo;   // $bar is a boolean
echo $bar;
?> 
<br />
<?php
$foo = 10;            // $foo 是一个整数
$str = "$foo";        // $str 是一个字符串
$fst = (string) $foo; // $fst 也是一个字符串

// 输出 "they are the same"
if ($fst === $str) {
    echo "they are the same";
}
?> 
</body>
</html>