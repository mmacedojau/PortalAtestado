<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $matricula = $_POST["matricula"];
            $setor = $_POST["setor"];
            $data = $_POST["data"];

            $sql = "INSERT INTO eventos (nome, matricula, setor, data) VALUES ('{$nome}','{$matricula}','{$setor}','{$data}')";

            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Atestado Cadastrado com Sucesso !');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar o atestado');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $nome = $_POST["nome"];
            $matricula = $_POST["matricula"];
            $setor = $_POST["setor"];
            $data = $_POST["data"];


            $sql = "UPDATE eventos SET
                        nome='{$nome}',
                        matricula='{$matricula}',
                        setor='{$setor}',
                        data='{$data}'
                    WHERE
                        id=".$_REQUEST["id"];


            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Atestado Editado com Sucesso !');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível editar o atestado');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;


        
        case 'excluir':
            $sql = "DELETE FROM eventos WHERE id=".$_REQUEST["id"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Atestado Excluido com Sucesso !');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir o atestado');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
    }