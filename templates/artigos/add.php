<!-- File: src/Template/Articles/add.ctp -->

<h1>Add Article</h1>
<?php

    echo $this->Form->criado($artigo);
    echo $this->Form->input('titulo');
    echo $this->Form->input('corpo', ['rows' => '3']);
    echo $this->Form->button(__('Salvar artigo'));
    echo $this->Form->end();
?>