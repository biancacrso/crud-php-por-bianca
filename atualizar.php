<?php
include "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "UPDATE contatos SET nome='$nome', email='$email' WHERE id=$id";
mysqli_query($conexao, $sql);

header("Location: index.php");