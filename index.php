<?php
include "conexao.php";

$sql = "SELECT * FROM contatos";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Contatos</title>
</head>
<body>

<h2>Cadastrar Contato</h2>

<form action="inserir.php" method="post">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit">Salvar</button>
</form>

<hr>

<h2>Lista de Contatos</h2>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>

    <?php while ($linha = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $linha['nome']; ?></td>
            <td><?php echo $linha['email']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $linha['id']; ?>">Editar</a> |
                <a href="excluir.php?id=<?php echo $linha['id']; ?>">Excluir</a>
            </td>
        </tr>
    <?php } ?>
</table>

</body>
</html>