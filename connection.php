<?php
    try{
        $conecta = mysqli_connect("localhost","slackbot115","","crud");
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        
        $query = "INSERT INTO `pessoa`(`cd_pessoa`, `nm_pessoa`, `nm_email`) VALUES (null,'$nome','$email')";
        
        mysqli_query($conecta, $query);
        
        echo "Cadastro feito com sucesso!!!";
    }
    catch (Exception $error){
        echo "Erro no cadastro: ".$error;
    }
?>