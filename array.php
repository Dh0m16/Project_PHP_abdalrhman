<form action="array.php" method="GET">
    <input type="text" name="name">
    <input type="submit" >

</form>



<?php
$xname = $_GET["name"];

$family = [
    "Designer" => "abdalrhman",
    "Programmer" => "AHmad",
    "Gamer" => "Majed",
];

$score = [
    "abdalrhman" => "99","A+"] 
    "AHmad" => ["80","B"] 
    "Majed" => ["60,"D"];


echo $score[$xname];

echo "Score: " . $score[$name][0];
echo "<br>";
echo "Grade: " . $score[$name][1];




//$family = array("father" , "mother" , "brother" , "Sister");
//$family[1] = "love";
//$family[3] = "Sister";
//echo $family[1];
//echo $family[3];
//echo count($family);

?>