
<?php
    //Variáveis do PHP
    $nome                =   "Tamsy";
    $sobrenome           =   "Caines";
    $cidade              =   "Mafra";
    $estado              =   "Santa Catarina";
    $idade               =    23;
    $salario             =    6700;
    $desconto_salario    =    325.75;
    $salario_liquido     =    $salario - $desconto_salario; //calcula o salário líquido
    $empregador          =   "Cleaners Ltda";

    echo "Bem Vindo <b>$nome $sobrenome</b>!<br>";
    echo "com $idade anos de idade, empregado no(a) <b>$empregador</b>, recebe um salário bruto de  R$ " .number_format($salario, 2, ',', '.') . " e salário líquido de R$ " .number_format($salario_liquido, 2, ',', '.') . " mensal.";
    echo " e salário líquido de R$ " .number_format($salario_liquido, 2, ',', '.') . " mensal.";

    echo "<hr>";

    if($idade <= 12){
        echo "O(A) usuário(a) $nome é crianca!";
        header("Location: https://www.disney.com");
    } elseif($idade <= 17){
        echo "O(A) usuário(a) $nome é adolescente!";
        header("Location: https://www.instagram.com");
    } elseif($idade <= 59){
        echo "O(A) usuário(a) $nome é adulto!";
        header("Location: https://www.cnn.com");
    } else {
        echo "O(A) usuário(a) $nome é idoso!";
        header("Location: https://www.essentialnutrition.com.br/produtos/omega-3");
    }

?>
