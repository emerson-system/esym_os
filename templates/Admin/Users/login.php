<div class="row">
    <div class="column-responsive column-100">
        <div class="users form content">
            <?= $this->Form->create() ?>
            <fieldset>
                <h1>Página de Login</h1>
                <?php
                    echo $this->Form->control('login');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Acessar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

