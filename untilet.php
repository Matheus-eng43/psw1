<?php
    $var = "Bill Gates";
    $tipo = gettype($var);
    echo "$var"."($tipo)"."<br>";
    $var = 12;
    $tipo = gettype($var);
    echo "$var ($tipo)<br>";
    $var = 3.1415;
    $tipo = gettype($var);
    echo "$var ($tipo)<br>"
    $var = true;
    $tipo = gettype($var);
    echo "$var ($tipo)<br>" 
?>

<?php 
    if(is_null($var)) {
        echo "Variável \$var é nula/vazia!<br>"
    }
    $var = "Bill Gates";
    if(is_string($var)){
        echo "Variável \$var é um string!<br>"
    }
    $var =12;
    if(is_integer($var)) {
        echo "Variável \$var é um inteiro!<br>"
    }
    $var = false;
    if(is_bool($var)) {
        echo "Variável \$var é um inteiro!<br>";
    }
    ?>
