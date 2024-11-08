<?php
    try {
        $con = new PDO('mysql:host=localhost;dbname=ppw', 'root', '');
        $rs = $con->query("select * from produto order by nome", PDO::FETCH_ASSOC);

        echo "total de registros selecionados: <strong>".$rs->rowCount()."</strong> <br>";
        foreach ($rs as $row) {
            echo $row['idProduto'].' '. $row['nome'].'<br>';
        }
    } catch(PDOException $e){
        $con->rollBack();
        echo "Erro do tipo <strong>PDOException</strong>! <br /> ";
        echo "Mensagem de erro: <strong> {$e->getMessage()} </strong> <br/>";
        die();
    }
    catch(Exception $e){
        $con->rollBack();
        echo "Erro do tipo <strong>Exception</strong>! <br /> ";
        echo "Mensagem de erro: <strong> {$e->getMessage()} </strong> <br/>";
        die();
    }
    finally{
        echo "<br />Conexão finalizada!";
        $rs = null;
        $con = null;
    }
?>