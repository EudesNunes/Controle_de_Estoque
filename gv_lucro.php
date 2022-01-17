<?php 

    include("conexao.php");
    $calculo  = $_POST ["pesquisa3"];

/*..............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s....................................*/

        $comando3   = $pdo->prepare("SELECT vds_valor ,vds_nome FROM vendas WHERE vds_codigo  = '$calculo' ");
        $resultado3 = $comando3->execute();
        $resultado3 = $comando3->fetchAll(PDO::FETCH_ASSOC);

        foreach($resultado3 as $coluna3)
    {
        $vd_nome   = $coluna3['vds_nome'];
        $vds_valor = $coluna3['vds_valor'];

    }


        $comando2   = $pdo->prepare("SELECT COUNT(*) FROM vendas WHERE vds_nome = '$vd_nome' AND vds_valor = '$vds_valor' ");
        $resultado2 = $comando2->execute();
        $resultado2 = $comando2->fetchAll(PDO::FETCH_ASSOC);

    
    foreach($resultado2 as $coluna2)
    {
 
        $qtd = $coluna2['COUNT(*)'];   
        $result= $vds_valor*$qtd;  
    }
    
/*..............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s....................................*/

?>

    <script>
    alert("Total de Vendas de: <?php echo($qtd);?> total arrecadado R$<?php echo($result);?>");
    window.open("lyt_Estoque.php", "_self");


 /*..............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s....................................*/
    </script>
