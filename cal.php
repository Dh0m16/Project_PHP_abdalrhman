<?php
//calculator

$nunber1 = $_GET["nunber1"];
$nunber2 = $_GET["nunber2"];
$op = $_GET["op"];

if(empty($number1)&& !empty($number2) && !empty($op)){

if($op === "+"){
    $result= $_GET["number1"] + $_GET["number2"];
}elseif($op === "-"){
    $result= $_GET["number1"] - $_GET["number2"];

}elseif($op === "*"){
    $result= $_GET["number1"] * $_GET["number2"];
    
}elseif($op === "/"){
    $result= $_GET["number1"] / $_GET["number2"];
}
}

if(empty($number1)){
    $result = "الرقم الاول فارغ";
}elseif(empty($number1)){
    $result = "الرقم الثاني فارغ";
}elseif(empty($op)){
    $result = "يرجى ادخال العملية";
}else{
if($op === "+"){
    $result= $_GET["number1"] + $_GET["number2"];
}elseif($op === "-"){
    $result= $_GET["number1"] - $_GET["number2"];

}elseif($op === "*"){
    $result= $_GET["number1"] * $_GET["number2"];
    
}elseif($op === "/"){
    $result= $_GET["number1"] / $_GET["number2"];
}
}





?>


<head>
    <link rel="stylesheet" href="boostrap.min.css">
</head>

<body>
<div class="contaimer">
    <form action= "cal.php" method= "GET" class="form">
        <div>
            <label>Enter Number1:</label>
                <input type="number" id="num1" name="mumber1" class="form-control">
</div>

<div>
            <label>Enter Number2:</label>
                <input type="number" id="num2" name="mumber2" class="form-control">
</div>
<br>
<div>
            <label>العملية:</label>
                <input type="text" name="op" class="form-control">
</div>

<div class="alert alert-success">
    <?php  echo $result ?>
</div>
<br>
<input type="submit" class="btn btn.primary">
</form>

</div>
</body>