<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Novos Produtos</title>
</head>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->

<body>
    <table  align="center" >
        <tr>
            <td>
            <h1> <b>Novo Produto:</b> </h1>
            </td>
        </tr>
    </table>

<!--...................................................-->

    <table  align="center" >
        <tr><td >

    <form action="gv_NovoProduto.php" method="post">
    
            <h4>Digite o nome do produto:</h4>
            <input type="text" id="nome" name="nome">
            <br><br>

            <h4>Digite a quantidade do produto:</h4>
            <input type="number" id="quantidade" name="quantidade" min="0" value="0">
            <br><br>

            <h4>Digite o valor do produto:</h4>
            <input type="number" id="valor" name="valor" min="0"  value="0.00" step=".01" >
            <br><br>

            <h4>Adicione a data:</h4>
            <input type="date" id="data" name="data">
            <br><br>

            <input type ="submit" value="Concluir" onclick="return Conf();">

    </form>

            <input type ="submit" value="voltar" onclick="Voltar();">
        </td>
        <td align="right">

<!--...................................................-->

<?php
    include("tb_cadastro.php");
?>
        <td></tr>

</table> 
</body>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->

<script>
    function Voltar(){
        window.open("index.html","_self")
    }

    function Conf()
    {
       var texto = valor.value;
       valor.value = texto.replace(",",".")

       
       if(nome.value=="")
       {
        alert("Preencha um nome")
        return false;
       }
       else if(quantidade.value=="" || quantidade.value=="0")
       {
        alert("Preencha uma quantidade")
        return false;
       }
       else if(valor.value=="" || valor.value=="0.00")
       {
        alert("Preencha um valor")
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
</html>