<?php

    try {
        $con = new PDO('mysql:host=localhost;dbname=ppw', 'root', '');
        if($con)
            echo "conexao realizada com sucesso<br><br>";

        $nome = $_GET["nome"];
        $img = $_GET["img"];

        // $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $con -> beginTransaction();
        // $con -> exec("insert into produto (nome, imagem) values ('$nome', '$img')");
        // $con -> commit();

        // echo "Registro inserido com sucesso";

        //codigo para previnir injeção de sql
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $con->beginTransaction();
        $pstmt = $con->prepare("insert into produto (nome,imagem) values (:produto_nome,
        :produto_imagem)");
        $pstmt->bindParam(':produto_nome' , $nome);
        $pstmt->bindParam(':produto_imagem' , $img);
        $pstmt->execute();
        $con->commit();
        echo "Registro inserido com sucesso!";

    } catch (PDOException $e) {
        $con->rollBack();
        echo "Erro do tipo <strong>PDOExeption</strong> <br>Mensagem de erro: {$e->getMessage()}";
        die();
    } catch (Exception $e) {
        echo "Erro do tipo <strong>Exeption</strong> <br>Mensagem de erro: {$e->getMessage()}";
        die();
    } finally {
        echo "conexão finalizada";
        $con = null;
    }

?>  