<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>yunsuanfu</title>
</head>

<body>
<?php

echo (5 % 3)."<br />";           // prints 2
echo (5 % -3)."<br />";          // prints 2
echo (-5 % 3)."<br />";          // prints -2
echo (-5 % -3)."<br />";         // prints -2

?> 
<br />
<?php

//using range function()
 //$numbers = array;range = value

$numbers= range(1,100,2);
// foreach ($array as $value)
 //{Do something with $value}
foreach ($numbers as $value) 
 {echo "<p>This is number: $value</P>";}

?> 
<br />
<?php
   for ($i = 1; $i <= 10; $i++) {
     if(($i % 2) == 1)  //odd
       {echo "<div class=\"dark\">a:$i</div>";}
     else   //even
       {echo "<div class=\"light\">b:$i</div>";}
    }
?> 
</body>
</html>