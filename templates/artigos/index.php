<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Novo Artigo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="artigos index large-9 medium-8 columns content">
    <h3><?= __('Artigos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('titulo') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modificado') ?></th>
                <th class="actions"><?= __('Acoes') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($artigos as $artigo) : ?>
                <tr>
                    <td><?= $this->Number->format($artigo->id) ?></td>
                    <td><?= h($artigo->titulo) ?></td>
                    <td><?= h($artigo->created) ?></td>
                    <td><?= h($artigo->modificado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Mostrar'), ['action' => 'view', $artigo->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $artigo->id]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $artigo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artigo->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>