<!DOCTYPE html>
<html>
  <head>
    <title>php practice</title>
  </head>

  <body>

<form action="php file.php" method="POST">

(Nmbers upto 2 decimal places supported) <br><br>
Number 1 <input type="number" step=0.01 name="num1"> <!--change step if you want to change the allowed no. of decimal points-->
<br> <br>  
Oprator (+,-,/,x): <input type="text" name="operator">
<br> <br>
Number 2 <input type="number" step = 0.01 name="num2">
<br> <br>
<input type="submit">

</form>

  <?php

  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  echo "<br> Result: "; 
if(($_POST["operator"]) == "+")
{
    echo $num1 + $num2;
}
else if(($_POST["operator"]) == "-")
{
    echo $num1 - $num2;
}

else if(($_POST["operator"]) == "/")
{
    echo $num1 / $num2;
}

else if(($_POST["operator"]) == "x")
{
    echo $num1 * $num2;
} else
echo "invalid input";

  ?>



</body>
</html>
