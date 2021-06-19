<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Artigo'), ['action' => 'edit', $artigo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Artigo'), ['action' => 'delete', $artigo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artigo->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Artigos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Artigo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="artigos view large-9 medium-8 columns content">
    <h3><?= h($artigo->titulo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($artigo->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('id') ?></th>
            <td><?= $this->Number->format($artigo->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($artigo->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modificado') ?></th>
            <td><?= h($artigo->modificado) ?></tr>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Corpo') ?></h4>
        <?= $this->Text->autoParagraph(h($artigo->corpo)); ?>
    </div>
</div>