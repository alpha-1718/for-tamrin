
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body dir="rtl">
<?php

$count = 4;
$base = 1000000;
$increase = 500000;

$final =($base + $increase) * $count;
?>
<center>
<table border="1" cellpadding="17"  cellspaicing="17">
<tr>
<td>تعداد</td>
<td>قیمت اولیه</td>
<td>افزایش قیمت</td>
<td>قیمت نهایی</td>
</tr>
<tr>
<td><?php echo $count;?></td>
<td><?php echo $base;?></td>
<td><?php echo $increase;?></td>
<td><?php echo $final;?></td>
</tr>
</table>    

</body>
</html>