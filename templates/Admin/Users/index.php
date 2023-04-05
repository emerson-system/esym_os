<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('Novo Usuário'), ['action' => 'adicionar'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('Home'), ['controller' => 'welcome','action' => 'index'], ['class' => 'button float-left']) ?><br><br>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('login') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('cpf') ?></th>
                    <th><?= $this->Paginator->sort('matricula') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->nome) ?></td>
                    <td><?= h($user->login) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= $this->Number->format($user->status) ?></td>
                    <td><?= h($user->cpf) ?></td>
                    <td><?= $this->Number->format($user->matricula) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'visualizar', $user->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'editar', $user->id]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'excluir', $user->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $user->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('durar') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) em um total de {{count}}')) ?></p>
    </div>
</div>
