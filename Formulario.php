<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style=" background-Color: Orange">


    <form action="Proc.php" method="post" enctype="multipart/form-data">

        <div>

            <label> Nome:</label>
            <input type= "text" id="nome" name="nome"/>
            <?php
                if(isset($_GET['erro']) && $_GET['erro'] == "nome")
                {
                    echo "<span style=\"color:red\"> Campo Obrigatório! </span>";
                }
            ?>

        </div>

        <div>

            <label> E-mail:</label>
            <input type= "text" id="email" name="email"/>
            <?php
                if(isset($_GET['erro']) && $_GET['erro'] == "email")
                {
                    echo "<span style=\"color:red\"> informe um endereço de e-mail </span>";
                }
            ?>

        </div>

        <div>

            <label> Telefone:</label>
            <input type= "text" id="telefone" name="telefone"/>
            <?php
                if(isset($_GET['erro']) && $_GET['erro'] == "telefone")
                {
                    echo "<span style=\"color:red\"> Informe um Número de Telefone </span>";
                }
            ?>

        </div>
        

        <div> 

            <label> Sexo:</label>
            <input type="radio" id="sexo" checked name="sexo" value="F"/> Feminino
            <input type="radio" id="sexo" name="sexo" value="M"/> Masculino

        </div>

        <div>

            <label> Senha:</label>
            <input type="password" id="senha" name="senha"/>
            <?php
                if(isset($_GET['erro']) && $_GET['erro'] == "senha")
                {
                    echo "<span style=\"color:red\"> Senha, necessario no minímo 6 caracteres </span>";
                }
            ?>
        </div>

        <div>
            <label> Adicionar Arquivos: </label>
            <input type="file" id="arq" name="arq"/>


        </div>

        <input type="submit" value="cadastro"/>
    
    </form>

</body>
</html>