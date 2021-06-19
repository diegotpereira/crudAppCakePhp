<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ArtigosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config):void{
        parent::initialize($config);
        $this->addBehavior('Timestamp');
    }
    
        
    
    public function validationDefault(Validator $validator): Validator{
        $validator
            ->notEmpty('titulo')
            ->notEmpty('corpo');

        return $validator;
    }
   
        
    
}
?>