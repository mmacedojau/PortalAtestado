<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $matricula = $_POST["matricula"];
            $setor = $_POST["setor"];
            $data = $_POST["data"];

            $sql = "INSERT INTO eventos (nome, matricula, setor, data) VALUES ('{$nome}','{$matricula}','{$setor}','{$data}')";

            $res = $conn->query($sql);
            break;

        case 'editar':
            break;
        
        case 'excluir':
            break;
    }