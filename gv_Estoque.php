<?php 

    include("conexao.php");
    $tb_pesquisa  = $_POST ["pesquisa2"];

/*..............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s....................................*/
        $comando3   = $pdo->prepare("SELECT etd_nome ,etd_preco FROM entradas WHERE etd_codigo  = '$tb_pesquisa' ");
        $resultado3 = $comando3->execute();
        $resultado3 = $comando3->fetchAll(PDO::FETCH_ASSOC);

        foreach($resultado3 as $coluna3)
    {
        $vd_nome    = $coluna3['etd_nome'];
        $vd_preco   = $coluna3['etd_preco'];

    }

        $comando1   = $pdo->prepare("SELECT etd_qtd FROM entradas WHERE etd_nome = '$vd_nome' AND etd_preco = '$vd_preco'");
        $resultado1 = $comando1->execute();
        $resultado1 = $comando1->fetchAll(PDO::FETCH_ASSOC);

        
        $comando2   = $pdo->prepare("SELECT COUNT(*) FROM vendas WHERE vds_nome = '$vd_nome' AND vds_valor='$vd_preco'");
        $resultado2 = $comando2->execute();
        $resultado2 = $comando2->fetchAll(PDO::FETCH_ASSOC);


    foreach($resultado1 as $coluna1)
    {
        $qtd1 = $coluna1['etd_qtd'];
       
    }
    foreach($resultado2 as $coluna2)
    {
 
        $qtd2 = $coluna2['COUNT(*)'];   
        
    }
    $result = $qtd1-$qtd2;
    
/*..............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s....................................*/

?>

    <script>
    alert("Produto com a quantidade de : <?php echo($result);?>");
    window.open("lyt_Estoque.php", "_self");


 /*..............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s....................................*/
    </script>
