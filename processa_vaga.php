<?php
    $nome           =     $_POST['nome'];
    $data_nasc      =     $_POST['data_nasc'];
    $sexo           =     $_POST['sexo'];
    $cidade         =     $_POST['cidade'];
    $estado         =     $_POST['estado'];

    //imprimindo os dados recebidos do formulario.
    echo "nome: $nome<br>Nascimento:$data_nasc<br>sexo:$sexo<br>cidade: $cidade/$estado";

    /*problema a ser solucionado:
    VAGA PARA ESTUDANTES COM OS SEGUINTES CRITÉRIOS:
    - Maior de 18 anos de idade;
    - Sexo Feminino
    - Nascidos no estado de SC
    informar se o condidato é elegivel ou não*/

    if($idade <= 18){
        echo "O(A) usuário(a) $nome não podera se candidatar!";}


?>