<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Estoque</title>
</head>
<body>


<table  align="center"  >
<tr>
<td>
    <h2> <b>Pesquisa:</b> </h2>
</td>
</tr>
</table>

<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->

<table  align="center" border="3" cellspacing="0" cellpadding="5"  >
<tr>
<td align="left">
<form action="gv_QuntidadeEstoque.php" method="post">

    <h4>Pesquisa Quantidade no Estoque:</h4>
    <select id="pesquisa1" name="pesquisa1">
    <option>Selecione um Produto</option>

<?php
    include("conexao.php"); 

        $comando   = $pdo->prepare("SELECT etd_codigo  , etd_nome FROM entradas");
        $resultado = $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

    foreach($resultado as $coluna)
    {

        $codigo = $coluna["etd_codigo"];
        $nome   = $coluna["etd_nome"];
        echo("<option value='$nome'>$codigo: $nome</option>");

    }
    
?>
</select>
    <br>
    <input type ="submit" value="Concluir" onclick="return Conf1();">
</form>
</td>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->
<td align="left">
<form action="gv_Estoque.php" method="post">

    <h4>Quantidade no Estoque com o Mesmo Valor:</h4>
    <select id="pesquisa2" name="pesquisa2">
    <option>Selecione um Produto</option>

<?php
    include("conexao.php"); 

        $comando   = $pdo->prepare("SELECT etd_codigo  , etd_nome,  etd_preco FROM entradas");
        $resultado = $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

    foreach($resultado as $coluna)
    {

        $codigo = $coluna["etd_codigo"];
        $nome   = $coluna["etd_nome"];
        $valor  = $coluna["etd_preco"];
        echo("<option value='$codigo'>$codigo: $nome no valor de R$$valor</option>");

    }
    
?>
</select>
    <br>
    <input type ="submit" value="Concluir" onclick="return Conf2();">
</form>
</td>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->
        
    <td align="right">     
        <form action="gv_lucro.php" method="post">

        <h4>Pesquisa a quantidade de vendas:</h4>
        <select id="pesquisa3" name="pesquisa3">
        <option>Selecione um Produto</option>

<?php
    include("conexao.php"); 

        $comando   = $pdo->prepare("SELECT vds_codigo  , vds_nome , vds_valor FROM vendas");
        $resultado = $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

    foreach($resultado as $coluna)
    {

        $codigo = $coluna["vds_codigo"];
        $nome   = $coluna["vds_nome"];
        $valor  = $coluna["vds_valor"];
        echo("<option value='$codigo'>$codigo: $nome  no valor de R$$valor</option>");

    }
    
?>
</select>

    <br>
    <input type ="submit" value="Concluir" onclick="return Conf3();" >

    </form>
    </td>
</tr>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->
    <tr>
        <td align="left">           
                <input type ="submit" value="voltar" onclick="Voltar();">
            </td>
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

    function Conf1()
    {

       if(pesquisa1.value=="Selecione um Produto")
       {
        alert("Selecione um Produto")
        return false;
       }
       else 
       {
        return true;
       }
    }
    function Conf2()
    {

       if(pesquisa2.value=="Selecione um Produto")
       {
        alert("Selecione um Produto")
        return false;
       }
       else 
       {
        return true;
       }
    }
    function Conf3()
    {

       if(pesquisa3.value=="Selecione um Produto")
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
</html>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->