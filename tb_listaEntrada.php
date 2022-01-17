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
        <td> Quantidade </td>
        <td> Preço </td>
        <td> Data </td>    
    </tr>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->

<?php

include("conexao.php");

        $data = $_POST ["data"];

/*..............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s....................................*/
        
        $comando  = $pdo->prepare("SELECT * FROM entradas WHERE etd_data = '$data'");
        $resultado = $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        $L = 0;

    foreach ($resultado as $coluna)
    {
          $codigo = $coluna["etd_codigo"];
          $nome   = $coluna["etd_nome"];
          $qtd    = $coluna["etd_qtd"];
          $preco  = $coluna["etd_preco"];
          $data   = $coluna["etd_data"];
      
          $L++;

    if($L%2==0) //verificando se o resto da divisão por 2 é zero (par)
        {
          echo("<tr class='linha_par'><td>$codigo</td><td>$nome</td><td>$qtd</td><td>$preco</td><td>$data</td></tr>");
        }
    else{
          echo("<tr class='linha_impar'><td>$codigo</td><td>$nome</td><td>$qtd</td><td>$preco</td><td>$data</td></tr>");
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
        window.open("lyt_ListaEntrada.php","_self")
    }   
</script>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->