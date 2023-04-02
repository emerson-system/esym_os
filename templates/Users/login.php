<div class="row">
    <div class="column-responsive column-100">
        <div class="users form content">
            <?= $this->Form->create() ?>
            <fieldset>
            <legend><?= __('Por favor entre com seu e-mail e senha') ?></legend>
                <h1>Página de Login</h1>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Login')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
