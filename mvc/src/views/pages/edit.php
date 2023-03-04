<?php $render('header'); ?>

<h3>Editar Usuario</h3>
<form action="<?= $base;?>/usuario/<?=$usuario['id'];?>/editar" method="POST">
    <label for="">
        <input type="text" value="<?= $usuario['nome']; ?>" name="name">
    </label>
    <br><br>
    <label for="">
        <input type="text" value="<?= $usuario['email']; ?>" name="email">
    </label>
    <input type="submit" value="Salvar">
</form>

<?php $render('footer'); ?>