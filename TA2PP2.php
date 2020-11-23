<?php
<form method="post" >
    <input type="text" name="numP" placeholder="Ingrese numero"><br>
    <input type="submit" name="submit" value="verificar"><br>
</form>

<?php

function pri($num)
    {
    $contador = 0;
    for($i = 1; $i <= $num; $i++){
    if($num % $i == 0)
    {
    //echo «$i <br>»;
    $contador++;
    }
    }

    if($contador==2){
    return true;
    }
    else{
    return false;
    }
}

$numP = $_POST["numP"];
$res = pri($numP);
if ($res == true) {
echo $numP." Es primo";
}
else {
echo $numP." No es primo";
}

?>