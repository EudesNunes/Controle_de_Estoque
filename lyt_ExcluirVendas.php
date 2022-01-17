<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Deletar Vendas</title>
</head>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->
<body>
    <table  align="center" >
        <tr>
            <td>
            <h2> <b>Excluir Produtos Vendidos:</b> </h2>
            </td>
        </tr>
    </table>


    <table  align="center">
        <tr align="center"><td >
<form action="gv_ExcluirVendas.php" method="post">
CÓDIGO:
   <select id="codigo" name="codigo">
       <option> Selecione um Produto </option>
       
       <?php
            include("conexao.php"); 
            $comando = $pdo->prepare("SELECT vds_codigo , vds_nome , vds_valor FROM vendas");
            $resultado = $comando->execute();
            $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultado as $coluna)
            {
                $codigo = $coluna["vds_codigo"];
                $nome = $coluna["vds_nome"];
                $valor = $coluna["vds_valor"];

                echo("<option value='$codigo'>$codigo -> $nome no valor de R$$valor</option>");
            }
       ?>

   </select>
    <input type="submit" value="DELETAR" onclick="return Conf();" >
</form>

<br>

</td>
</tr>  

<!---------------------------------------------------->
    <tr align="center"> <td>

    <?php

    include("tb_vendas.php");

    ?>
    <br>
    <input type ="submit" value="voltar" onclick="Voltar();">
    
    </td></tr>
    

    </table>
</script>
</body>

<script>
    function Voltar(){
     window.open ("lyt_ExcluirGeral.php", '_self');
    }

    function Conf()
    {

       if(codigo.value=="Selecione um Produto")
       {
        alert("Selecione um Produto")
        return false;
       }
       else 
       {
        return true;
       }
    }
</script>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->
</html>