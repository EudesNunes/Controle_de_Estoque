<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Controle de Estoque</title>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->      
</head>
<body>

    <table  align="center" >
        <tr>
            <td>
            <h1> <b>Excluir:</b> </h1>
            </td>
        </tr>
    </table>
    <table align="center" width="40%" border="1" cellspacing="10">
        
    <tr>    
        <td align="center"> <a href="lyt_ExcluirEntrada.php" > 
             <img width="100px" src="templates/alterar_entrada.png"> 
             <br>
             <b>Excluir Entrada</b>
             </a> 
        </td> 
        <td align="center"> 
            <a href="lyt_ExcluirVendas.php"> 
            <img width="100px" src="templates/alterar_venda.png"> 
            <br>
            <b>Excluir Vendas</b>
            </a> 
    </tr>
    </table>

    <br>
    <table  align="center" >
        <tr>
            <td>           
                <input type ="submit" value="voltar" onclick="Voltar();">
            </td>
        </tr>
    </table>
    

    

</body>

<script>
    function Voltar()
    {
        window.open("index.html","_self")
    }
    
</script>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->
</html>