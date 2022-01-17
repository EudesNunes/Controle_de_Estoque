<?php

    include("conexao.php");

        $vd_codigo   =  $_POST ["codigo"];
        $vd_data     =  $_POST ["data"];

        
/*..............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s....................................*/


        $comando1   = $pdo->prepare("SELECT etd_nome ,etd_preco FROM entradas WHERE etd_codigo = '$vd_codigo' ");
        $resultado1 = $comando1->execute();
        $resultado1 = $comando1->fetchAll(PDO::FETCH_ASSOC);

    foreach($resultado1 as $coluna1)
    {
        $vd_nome   = $coluna1['etd_nome'];
        $vds_valor = $coluna1['etd_preco'];

    }

    $resultado = $pdo->prepare("INSERT INTO vendas(vds_nome,vds_data,vds_valor)
                                VALUES (:vds_nome,:vds_data,:vds_valor)");
    
    $resultado-> bindValue(":vds_nome",$vd_nome);
    $resultado-> bindValue(":vds_data",$vd_data);
    $resultado-> bindValue(":vds_valor",$vds_valor);
    $resultado-> execute();

    $nv_codigo = $pdo-> lastInsertId();

/*..............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s....................................*/
?>



<script>

    alert("Produto Adicionado com o ID: <?php echo($nv_codigo);?>");

    window.open("lyt_CadastroVendido.php", "_self");

/*..............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s....................................*/

</script>

