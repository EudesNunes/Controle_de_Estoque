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
            <h1> <b>Listas:</b> </h1>
            </td>
        </tr>
    </table>
    <table align="center" width="40%" border="1" cellspacing="10">
        
    <tr>    
        <td align="center"> 
            <a href="lyt_ListaEntrada.php"> 
             <img width="100px" src="templates/alterar_entrada.png"> 
             <br>
             <b>Lista de Entrada</b>
             </a> 
        </td> 
        <td align="center"> 
            <a href="lyt_ListaVenda.php"> 
            <img width="100px" src="templates/alterar_venda.png"> 
            <br>
            <b>Lista de Vendas</b>
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