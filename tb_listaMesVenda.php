<style>
    .cabecalho{
        background-color:red;
        font-size:20px;
    }
    .linha_par{
        background-color:wheat;

    }
    .linha_impar{
        background-color:silver;
        color:blue;
    }
</style>

<table aligh="center" border="3" cellspacing="0" cellpadding="5">
    <tr class="cabecalho"> 
        <td> Código </td>
        <td> Nome </td>
        <td> Preco </td>
        <td> Data </td>    
    </tr>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->

<?php

include("conexao.php");

        $mes = $_POST ["mes"];
        $ano = $_POST ["ano"];

/*..............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s....................................*/
        
        $comando  = $pdo->prepare("SELECT * FROM vendas WHERE MONTH(vds_data) = '$mes' AND YEAR(vds_data)='$ano'");
        $resultado = $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        $L = 0;

    foreach ($resultado as $coluna)
    {
          $codigo = $coluna["vds_codigo"];
          $nome   = $coluna["vds_nome"];
          $preco  = $coluna["vds_valor"];
          $data   = $coluna["vds_data"];
      
          $L++;

    if($L%2==0) //verificando se o resto da divisão por 2 é zero (par)
        {
          echo("<tr class='linha_par'><td>$codigo</td><td>$nome</td><td>$preco</td><td>$data</td></tr>");
        }
    else{
          echo("<tr class='linha_impar'><td>$codigo</td><td>$nome</td><td>$preco</td><td>$data</td></tr>");
        }

    }

?>

</table>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->
<table>
        <tr> <td><input type ="submit" value="voltar" onclick="Voltar();"></td></tr>
</table>

<script>
    function Voltar()
    {
        window.open("lyt_ListaVenda.php","_self")
    }   
</script>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->