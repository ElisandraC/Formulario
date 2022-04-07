<?php

    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    echo "<p><strong> Nome: " . $nome . "</strong></p>";
    echo "<p><strong> E-mail: " . $email . "</strong></p>";
    echo "<p><strong> Telefone: " . $telefone . "</strong></p>";
    echo "<p><strong> Sexo: " . $sexo . "</strong></p>";
    echo "<p><strong> Senha: " . $senha . "</strong></p>";
    

    if( strlen($nome)==0 )
    {
        header("location:Formulario.php?erro=nome");
    }
    if( strlen($senha)<= 6 )
    {
        header("location:Formulario.php?erro=senha");
    }
    if( strlen($email)== 0 )
    {
        header("location:Formulario.php?erro=email");
    }
    if( strlen($telefone)== 0 )
    {
        header("location:Formulario.php?erro=telefone");
    }

    $tmp = $_FILES['arq']['tmp_name'];
    $pasta = "arq" . $_FILES['arq']['name'];
    move_uploaded_file($tmp , $pasta);
    echo (int) move_uploaded_file($tmp , $pasta);

    if(move_uploaded_file($tmp , $pasta)==0 )
    {
        echo "Seu arquivo foi recebido!";
    }
?>