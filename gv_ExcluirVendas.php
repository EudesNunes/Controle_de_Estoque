<?php

include("conexao.php");

$codigo = $_POST["codigo"];

$resultado = $pdo->prepare("DELETE FROM vendas WHERE vds_codigo=:vds_codigo ");

$resultado->bindValue(":vds_codigo",$codigo);

$resultado->execute();
?>

<script>
    alert("Produto Deletado.");
    window.open("lyt_ExcluirVendas.php","_self");
</script>