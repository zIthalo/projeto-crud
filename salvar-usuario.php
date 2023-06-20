<?php
    switch ($_REQUEST["acao"]) { //este switch recebe as ações que serão criadas
        case 'cadastrar': //caso a ação seja cadastrar
            $nome = $_POST["nome"]; //$nome receberá o campo do DB que tiver o nome 'nome'
            $email = $_POST["email"];// a mesma lógica se aplica para os demais campos
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];


            //query de inserção ↓ é o nome disso
            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')"; //insira na tabela usuarios nas colunas nome, email. . . os valores que estão nas variáveis '{$nome}', '{$email}' . . .;

            //na variável res = pegue a query ($sql)
            $res = $conn->query($sql);

            if($res==true){//se o resultado for verdadeiro, ou seja, se o camarada conseguir se cadastrar. faça. . .
                    print "<script>alert('Cadastrado com sucesso');</script>";
                    print "<script>location.href='?page=listar';</script>" ;  
            }else{
                print "<script>alert('Deu errado');</script>";
                print "<script>location.href='?page=listar';</script>" ;  
            }
            break;
    
        case 'editar': //cada caso é uma sigla do crud - o u de update
            $nome = $_POST["nome"]; //$nome receberá o campo do DB que tiver o nome 'nome'
            $email = $_POST["email"];// a mesma lógica se aplica para os demais campos
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET
                        nome = '{$nome}',
                        email = '{$email}',
                        senha = '{$senha}',
                        data_nasc = '{$data_nasc}'
                    WHERE
                        id=".$_REQUEST["id"];
                        
            
            $res = $conn->query($sql);

            if($res==true){//se o resultado for verdadeiro, ou seja, se o camarada conseguir se cadastrar. faça. . .
                    print "<script>alert('Editado com sucesso');</script>";
                    print "<script>location.href='?page=listar';</script>" ;  
            }else{
                print "<script>alert('Deu errado. Não foi possível editar');</script>";
                print "<script>location.href='?page=listar';</script>" ;  

            }
            break;
            
        case 'excluir':
            
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
            
            $res = $conn->query($sql);

            if($res==true){//se o resultado for verdadeiro, ou seja, se o camarada conseguir se cadastrar. faça. . .
                
                print "<script>alert('Excluído com sucesso');</script>";

                print "<script>location.href='?page=listar';</script>" ;  
                
            }else{
                print "<script>alert('Deu errado. Não foi possível excluir.');</script>";
                
                print "<script>location.href='?page=listar';</script>" ;  
                
            }
            break;
        }
?>