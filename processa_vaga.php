<?php
    $nome           =     $_POST['nome'];
    $data_nasc      =     $_POST['data_nasc'];
    $sexo           =     $_POST['sexo'];
    $cidade         =     $_POST['cidade'];
    $estado         =     $_POST['estado']; 

    //calcular a idade do(a) usuário(a)
    $data_nascimento   =    new DateTime($data_nasc);
    $data_atual        =    new DateTime();
    $idade             =    $data_atual ->diff($data_nascimento)->y


    //imprimindo os dados recebidos do formulario.
    echo "nome: $nome<br>Nascimento: $data_nasc ($idade anos)<br>sexo:$sexo<br>cidade: $cidade/$estado";

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

    

    if($sexo == "fem" && $estado == "SC" && $idade >= 18){
        echo '
        <script>
        window.alert ("candidato aprovado!\n seguimos para as próximas etapas.");
    </script>
    ';

    } 
    else
        {
       echo '
        <script>
        window.alert ("candidato não prenche os requisitos!\n Verifique as regras da vaga..");
    </script>';
        }


?>