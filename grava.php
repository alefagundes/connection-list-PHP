<?php
include("test.php");

$fnome = $_GET["nome"];

mysqli_query($conexao, "insert into department (Name) values ('$fnome')");

header("location:lista.php");

?>
