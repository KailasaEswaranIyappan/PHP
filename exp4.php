<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
         $flight = array("AIRBUS", "BOEING", "BOMBARDIER");
var_dump($flight[1]);
$flight = array("AIRBUS", "BOEING", "BOMBARDIER");
$arrlength = count($flight);
for($x = 0; $x < $arrlength; $x++) {
    
    echo "$flight[$x] number is $x";
    echo "<br>";
}
        $x = 1; 
while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 
for ($x = 0; $x <= 10; $x++) {    
echo "The number is: $x <br>";
} 
        function writeMsg() {
    echo "Hello world!";
}
writeMsg(); // call the function
        ?>
    </body>
</html>