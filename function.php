<?php

function add($x ,$y){
    return $x + $y;
}
echo add(15 ,10);


function hello($x){
    $user = $x ;

    if($user === "abdalrhman"){
        echo "Hello " . $user;

    
}else{
    echo "Bye " . $user;
}
}

hello(abdalrhman);
echo "<br>";
hello(Anas);


?>