<?php
include "conexao.php";

$id = $_GET['id'];

$sql = "SELECT * FROM contatos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
$contato = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Contato</title>
</head>
<body>

<h2>Editar Contato</h2>

<form action="atualizar.php" method="post">
    <input type="hidden" name="id" value="<?php echo $contato['id']; ?>">
    <input type="text" name="nome" value="<?php echo $contato['nome']; ?>" required>
    <input type="email" name="email" value="<?php echo $contato['email']; ?>" required>
    <button type="submit">Atualizar</button>
</form>

</body>
</html>