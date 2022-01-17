<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Lista Entrada</title>
</head>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->      

<body>
    <table  align="center" >
        <tr>
            <td>
            <h1> <b>Lista de Vendas</b> </h1>
            </td>
        </tr>
    </table>
<!--...................................................-->
    <table  align="center" >
    <tr><td >

    <form action="tb_listavenda.php" method="post">   
            
            <h4>Procure pela data:</h4>
            <input type="date" id="data" name="data">
            <br><br>
            <input type ="submit" value="Concluir" onclick="return Conf1();" >


    </form>
            <input type ="submit" value="voltar" onclick="Voltar();">

            </tr></td>
            <tr><td align=left>
            <form action="tb_listaMesVenda.php" method="post">   
            
            <h2>Procure pelo Mês:</h2>
            <h5>Adicione a Mês:</h5>
            <input type="number" id="mes" name="mes" min="0" value="0">
            <br>
            <h5>Adicione a Ano:</h5>
            <input type="number" id="ano" name="ano" min="0" value="0">
            <br>
            
            <input type ="submit" value="Concluir" onclick="return Conf2();" >

    </form>
    
    </tr></td>
            <tr><td align=left>
            <form action="tb_listaAnoVenda .php" method="post">   
            
            <h2>Procure pelo Ano:</h2>
            <h5>Adicione a Ano:</h5>
            <input type="number" id="ano2" name="ano2" min="0" value="0">
            <br>
            <input type ="submit" value="Concluir" onclick="return Conf3();" >


    </form>
    </tr></td>

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
        window.open("lyt_ListaGeral.php","_self")
    }

    function Conf1()
    {
    if(data.value=="")
    {
        alert("Selecione uma data")
        return false;
    }
    else 
    {
        return true;
    }
    }

    function Conf2()
    {
    if(mes.value=="" || mes.value=="0")
    {
        alert("Selecione um Mês")
        return false;
    }
    else if(ano.value=="0")
    {
        alert("Selecione um Ano")
        return false;
    }
    else 
    {
        return true;
    }
    }
    function Conf3()
    {
     if(ano2.value=="0")
    {
        alert("Selecione um Ano")
        return false;
    }
    else 
    {
        return true;
    }
    }
    
</script>
</html>