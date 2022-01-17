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

<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->

<table aligh="center" border="3" cellspacing="0" cellpadding="5">
    <tr class="cabecalho"> 
        <td> Código </td>
        <td> Nome </td>
        <td> Quantidade</td> 
        <td> Valor </td>
        <td> Data </td>
        
    </tr>
<!--...................................................-->
<?php
    include("conexao.php");
        $comando1   = $pdo ->prepare("SELECT * FROM entradas ORDER BY etd_nome");
        $resultado  = $comando1->execute();
        $resultado  = $comando1->fetchAll(PDO::FETCH_ASSOC); 
        $L = 0;


    foreach ($resultado as $coluna)
    {
          $codigo = $coluna["etd_codigo"];
          $nome   = $coluna["etd_nome"];
          $qtd    = $coluna["etd_qtd"];
          $valor  = $coluna["etd_preco"];
          $data   = $coluna["etd_data"];
      
          $L++;

    if($L%2==0) //verificando se o resto da divisão por 2 é zero (par)
        {
          echo("<tr class='linha_par'><td>$codigo</td><td>$nome</td><td>$qtd</td><td>$valor</td><td>$data</td></tr>");
        }
    else{
          echo("<tr class='linha_impar'><td>$codigo</td><td>$nome</td><td>$qtd</td><td>$valor</td><td>$data</td></tr>");
        }

    }

?>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->

</table>