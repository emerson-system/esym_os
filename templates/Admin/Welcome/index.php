<div class="row">
    <div class="column-responsive column-100">
        <h2>Bem vindo <?php echo $user['nome']; ?> </h2>
        <?= $this->Html->link(__('Lista de Usuários'), ['controller' => 'users','action' => 'index'], ['class' => 'button float-left']) ?>

        <?= $this->Html->link(__('Sair'), ['action' => 'sair'], ['class' => 'button float-right']) ?>
    </div>
</div>