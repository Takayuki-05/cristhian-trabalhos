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
    /*caso ele não esteja elegivel para a vaga 
    <script>
        window.alert ("candidato não prenche os requisitos!\n Verifique as regras da vaga.");
    </script>

    caso a usuária esteja elegivel
    Apresenta uma mensagem na tela
    "Usuária elegivel para a vaga!"*/

    if($idade <= 18){
        echo "O(A) usuário(a) $nome é inelegivel para a vaga!";
    } elseif($sexo != "feminino"){
        echo "O(A) usuário(a) $nome não é elegivel para a vaga!";
    } elseif($estado != "SC"){
        echo "O(A) usuário(a) $nome não é elegivel para a vaga!";
    } else

     <script>
        window.alert ("candidato não prenche os requisitos!\n Verifique as regras da vaga.");
    </script>
?>