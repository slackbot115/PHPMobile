<?php
    try{
        $conecta = mysqli_connect("localhost","slackbot115","","crud");
        
        $query = "select * from pessoa order by cd_pessoa asc";
        
        $res = mysqli_query($conecta, $query);
        
        
        $registro = array(
            'pessoas' => array()
        );
        
        $i = 0;
        
        while ($linha = mysqli_fetch_assoc($res)){
            $registro['pessoas'][$i] = array(
                'codigo' => $linha['cd_pessoa'],
                'nome' => $linha['nm_pessoa'],
                'email' => $linha['nm_email']
            );
            $i++;
        }
        
        echo json_encode($registro);
        
        echo "Cadastro feito com sucesso!!!";
    }
    catch (Exception $error){
        echo "Erro no cadastro: ".$error;
    }
?>