<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidaturas</title>
</head>
<body>
    <form name="pss" action="processa_vaga.php" method="post">
        <h3>Candidate-se</h3>
        <hr>
        <small>Nome completo</small><br>
        <input type="text" name="nome" placeholder="Nome completo"><br><br>
        <br>

        <small>Data de nascimento</small><br>
         <input type="date" name="data_nasc" placeholder="Data de nascimento"><br><br>
         <br>

        <small>sexo</small><br>
         <select name="sexo">
            <option>Selecione</option>
            <option value="Mas">Masculino</option>
             <option value="Fem">Feminino</option>
         </select>
         <br><br>

         <small>Naturalidade</small><br>
         <input type="text" name="cidade" placeholder="Cidade de nascimento"><br><br>

         <small>UF Naturalidade</small><br>
         <select name="estado">
            <option>Selecione</option>
            <option value="PR">Paraná</option>
             <option value="SC">Santa Catarina</option>
             <option value="RS">Rio Grande do Sul</option>
       </select><br><br>

       <input type="submit" value="Enviar">


    </form>
</body>
</html>