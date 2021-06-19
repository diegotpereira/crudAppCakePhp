<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class User extends Entity
{

    protected $_accessible = [
        'id' => true,
        'titulo' => true,
        'corpo' => true,
        'created' => true,
        'mdoficado' => true
    ];
}

?>