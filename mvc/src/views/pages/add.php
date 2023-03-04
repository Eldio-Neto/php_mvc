<?php $render('header'); ?>

<form action="<?= $base; ?>/novo" method="POST">
    <label for="">
        <input type="text" placeholder="Nome usuário" name="name">
    </label>
    <br><br>
    <label for="">
        <input type="text" placeholder="Email usuário" name="email">
    </label>
    <input type="submit" value="Adicionar">
</form>

<?php $render('footer'); ?>