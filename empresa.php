<?php
include_once './conexao.php'; //incluir o outro script
//ver como faz esse tipo de comentário na estrutura HTML depois, bem, charset pra codificação dos caracteres, doctype pra declarar o tipo de documento
?>
<!DOCTYPE html
<html>
    <head>
        <meta charset = "UTF-8"> 
        <title>Empresa Fulano de Tal</title>
    </head>
    <body>
        <h1>Cadastro</h1>
        <?php
            $database = filter_input_array(INPUT_POST, FILTER_DEFAULT); //leitor dos dados Nome e E-mail, ao que parece array é como um vetor para PHP
            if(!empty($database['CadUser'])){
                var_dump($database); //era pra isso só aparecer depois de informar nome e e-mail, mas ele tá deixando os valores anteriores armazenados - olhar depois
                $query_user = "INSERT INTO usuario (nome, email) VALUES ('".$database['nome']."', '".$database['email']."')";
                $cad_user = $conexao->prepare($query_user);
                $cad_user->execute();
                if($cad_user->rowCount()){
                    echo "<p style='color: green'>Usuário cadastrado com sucesso</p>";
                }else{
                    echo "<p style='color: red'>Erro, não foi possível realizar o cadastro</p>";
                }
            } 
        ?>
        <form name="CadUser" method="POST" action="">
            <label>Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Nome completo" required><br><br>
            <label>E-mail: </label>
            <input type="email" name="email" id="email" placeholder="E-mail profissional" required><br><br>
            <input type="submit" value="Cadastrar" name="CadUser">
        <?php
        ?>
    </body>

</html>