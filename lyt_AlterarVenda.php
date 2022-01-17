<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ALTERA CADASTRO</title>
</head>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->
<body>

    <table  align="center" >
        <tr>
            <td>
            <h1> <b>Alteração de Produtos Vendidos:</b> </h1>
            </td>
        </tr>
    </table>
<!--...................................................-->
    <table  align="center" >
        <tr>
            <td>
    <form action="gv_alterarVendas.php" method="post">
       
            <h4>Escolha um Produto:</h4>
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
<!--...................................................-->
    <br> <br>

             <h4>Digite o novo nome do produto:</h4>
            <input type="text" id="nome" name="nome">
            <br><br>

            <h4>Adicione a nova data:</h4>
            <input type="date" id="data" name="data">
            <br><br>
            
            <h4>Digite o novo valor do produto:</h4>
            <input type="number" id="valor" name="valor" min="0"  value="0.00" step=".01" >
            <br><br>

            <input type ="submit" value="Concluir" onclick="return Confi();" >

    </form>
    
    <input type ="submit" value="voltar" onclick="Voltar();">
            </td>
         <td>
   
           
<br> <br>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->

<?php
include("tb_vendas.php");
?>

 </td>
     </tr>
        </table>
</body>
<!--............................__(.)>....__(.)>....__(.)>....__(.)>....__(.)>...................................
................................\___).....\___).....\___).....\___).....\___)....................................
..................................E.........u.........d.........e.........s...................................-->
<script>
    function Voltar()
    {
        window.open("lyt_AlterarGeral.php","_self")
    }

    function Confi()
    {
       var texto = valor.value;
       valor.value = texto.replace(",",".")

       if(codigo.value=="Selecione um Produto")
       {
        alert("Selecione um Produto")
        return false;
       }
       else if(nome.value=="")
       {
        alert("Preencha um nome")
        return false;
       }
       else if(data.value=="")
       {
        alert("Preencha uma data")
        return false;
       }
       else if(valor.value=="" || valor.value=="0.00")
       {
        alert("Preencha um valor")
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