<?php

include("conexao.php");

$codigo = $_POST["codigo"];

$resultado = $pdo->prepare("DELETE FROM entradas WHERE etd_codigo=:etd_codigo ");

$resultado->bindValue(":etd_codigo",$codigo);

$resultado->execute();
?>

<script>
    alert("Produto Deletado.");
    window.open("lyt_ExcluirEntrada.php","_self");
</script>