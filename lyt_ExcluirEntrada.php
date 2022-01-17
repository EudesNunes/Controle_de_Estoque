<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Deletar Entradas</title>
</head>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->
<body>
    <table  align="center" >
        <tr>
            <td>
            <h2> <b>Excluir Produtos Adicionados:</b> </h2>
            </td>
        </tr>
    </table>


    <table  align="center">
        <tr align="center"><td >
<form action="gv_ExcluirEntrada.php" method="post">
CÓDIGO:
   <select id="codigo" name="codigo">
       <option> Selecione um Produto </option>
       
       <?php
            include("conexao.php"); 
            $comando = $pdo->prepare("SELECT etd_codigo ,etd_nome, etd_preco FROM entradas");
            $resultado = $comando->execute();
            $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultado as $coluna)
            {
                $codigo = $coluna["etd_codigo"];
                $nome = $coluna["etd_nome"];
                $valor  = $coluna["etd_preco"];

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

    include("tb_cadastro.php");

    ?>
    <br>
    <input type ="submit" value="voltar" onclick="Voltar();">
    
    </td></tr>
    

    </table>
</script>
</body>

<script>
    function Voltar(){
        window.open("lyt_ExcluirGeral.php","_self")
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