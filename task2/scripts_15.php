
<html>
<head>
<title>script15</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td> <input type="text" name="num1" value="" placeholder="Enter value1"/> </td>
</tr>
<tr>
<td> <input type="text" name="num2" value="" placeholder="Enter value2"/> </td>
</tr>
<tr>
<td> <input type="text" name="num3" value="" placeholder="Enter value3"/> </td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$a = $_POST['num1'];
$b = $_POST['num2'];
$c = $_POST['num3'];
if($a>$b && $a>$c)
{
echo " $a is a Big number. ";
}
else
if($b>$c && $b>$a)
{
echo " $b is a Big number. ";
}
else
if($c>$a && $c>$b)
{
echo " $c is a Big number. " ;
}
}
?>
</body>
</html>