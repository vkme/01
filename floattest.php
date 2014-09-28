<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>floattest</title>
</head>

<body>
<?php
$e = 1.234; 
$f = 1.2e3; 
$c = 7E-10;
$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;
echo $e.'<br />';
echo $f.'<br />';
echo $c.'<br />';
if(abs($a-$b) < $epsilon) {
    echo "true";
}
?> 
</body>
</html>