<?php

/*
echo "hi <br>";
ECHO 'HI <br>';
print ("hello <br>");

$num1=4;
$num2="4";

if ($num1===$num2)
{
    //same value but different datatype so false 
    echo'===';
}
if ($num1==$num2)
{
    //same value even when it is string
    echo'==';
}
*/
echo'<html>
<!TYPEDOC html>
<head>


</head>
<body>
    <form method="get" >
    <label for="first_operand">First operand:</label><br>
    <input type="number" id="first_operand" name="first_operand"><br>

    

    <input type="radio" id="+" name="operator" value="+">
    <label for="+">+</label><br>
    <input type="radio" id="-" name="operator" value="-">
    <label for="-">-</label><br>
    <input type="radio" id="*" name="operator" value="*">
    <label for="*">*</label><br>
    <input type="radio" id="/" name="operator" value="/">
    <label for="/">/</label><br>

    <label for="second_operand">second operand:</label><br>
    <input type="number" id="second_operand" name="second_operand"><br>

    <input type="submit" value="Submit">
    


    </form>

</body>

</html>';

$num1=$_GET["first_operand"];
$num2=$_GET["second_operand"];
$RESULT;
$operator=$_GET["operator"];
switch($operator)
{
    case'+':
        $RESULT=$num1+$num2;
        break;
    case'-':
        $RESULT=$num1+$num2;
        break;
    case'*':
        $RESULT=$num1+$num2;
        break;
    case'/':
         $RESULT=$num1+$num2;
        break;
    default:
        echo"ERROR ,you should choose correct operand. ";
        break;
}
echo"<h1>the result is $RESULT </h1>";
?>