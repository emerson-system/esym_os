<!--<h2>Bem vindo Emerson </h2> -->

<div class="row">
    <div class="column-responsive column-100">
        <h2>Bem vindo <?php echo $user['email']; ?> </h2>
        <?= $this->Form->button(__('Sair')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>