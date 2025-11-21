<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Editar Piloto</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='public/css/style.css'>
</head>

<body class='container mt-5'>
    <h1>Editar Piloto</h1>
    <?php if (!empty($erros)): ?><div class='alert alert-danger'>
            <ul><?php foreach ($erros as $e): ?><li><?= $e ?></li><?php endforeach; ?></ul>
        </div><?php endif; ?>
    <form method='POST' action='index.php?action=update&id=<?= $piloto['id'] ?>'>
        <div class='mb-3'><label>Nome</label><input name='nome' class='form-control' value='<?= $piloto['nome'] ?>'></div>
        <div class='mb-3'><label>Idade</label><input type='number' name='idade' class='form-control' value='<?= $piloto['idade'] ?>'></div>
        <div class='mb-3'><label>Nacionalidade</label><input name='nacionalidade' class='form-control' value='<?= $piloto['nacionalidade'] ?>'></div>
        <div class='mb-3'><label>Títulos</label><input type='number' name='titulos' class='form-control' value='<?= $piloto['titulos'] ?>'></div>
        <div class='mb-3'><label>Equipe</label><select name='equipe_id' class='form-select'><?php foreach ($equipes as $e): ?><option value='<?= $e['id'] ?>' <?= $piloto['equipe_id'] == $e['id'] ? "selected" : "" ?>><?= $e['nome'] ?></option><?php endforeach; ?></select></div>
        <div class='mb-3'><label>Categoria</label><select name='categoria_id' class='form-select'><?php foreach ($categorias as $c): ?><option value='<?= $c['id'] ?>' <?= $piloto['categoria_id'] == $c['id'] ? "selected" : "" ?>><?= $c['nome'] ?></option><?php endforeach; ?></select></div>
        <button class='btn btn-success'>Atualizar</button> <a href='index.php' class='btn btn-secondary'>Cancelar</a>
    </form>
</body>

</html>