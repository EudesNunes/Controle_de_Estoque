<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Novos Produtos</title>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->
</head>

<body>
<table  align="center" >
    <tr>
        <td>
        <h1> <b>Produto Vendido: </b> </h1>
        </td>
    </tr>
</table >

<!--...................................................-->
<table  align="center" >
    <tr><td>   

        <form action="gv_vendido.php" method="post">
        
<!--SELECT-->
        <h4>Selecione o produto:</h4>
        <select id="codigo" name="codigo">
        <option>Selecione um Produto</option>

<?php
    include("conexao.php"); 

        $comando   = $pdo->prepare("SELECT etd_codigo  , etd_nome , etd_preco FROM entradas");
        $resultado = $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

    foreach($resultado as $coluna)
    {

        $codigo = $coluna["etd_codigo"];
        $nome   = $coluna["etd_nome"];
        $valor  = $coluna["etd_preco"];
        echo("<option value='$codigo'>$codigo: $nome  no valor de R$$valor</option>");

    }
?>
        </select>
        <br><br>
<!--...................................................-->

 <!--DATA-->
        <h4>Adicione a data:</h4>
        <input type="date" id="data" name="data">
        <br><br>

        <input type ="submit" value="Concluir"  onclick="return Conf();">

    </form>

    <br>
    <input type ="submit" value="voltar" onclick="Voltar();">

    </td>

<!--...................................................-->
    <td align="right">
<?php
    include("tb_vendas.php");
?>
    <td></tr>

</table> 
</body>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->

<script>
    function Voltar()
    {
        window.open("index.html","_self")
    }
    
    function Conf()
    {
       if(codigo.value=="Selecione um Produto")
       {
        alert("Selecione um Produto")
        return false;
       }
       else if(data.value=="")
       {
        alert("Preencha uma data")
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