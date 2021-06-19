<?php 
namespace App\Controller;

use Cake\Controller\Controller;
use App\Controller\AppController;

class ArtigosController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }
    public function index()
    {
        $artigos = $this->Artigos->find('all');
        $this->set(compact('artigos'));
    }

    public function view($id = null)
    {
        $artigo = $this->Artigos->get($id);
        $this->set(compact('artigo'));
    }
    public function add()
    {
        $artigo = $this->Artigos->newEntity();
        if ($this->request->is('post')) {
            $artigo = $this->Artigos->patchEntity($artigo, $this->request->getData());
            if ($this->Artigos->save($artigo)) {
                $this->Flash->success(__('Seu artigo foi salvo.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não é possível adicionar o seu artigo.'));
        }
        $this->set('artigo', $artigo);
    }

    public function edit($id = null)
{
    $artigo = $this->Artigos->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Artigos->patchEntity($artigo, $this->request->getData());
        if ($this->Artigos->save($artigo)) {
            $this->Flash->success(__('Seu artigo foi atualizado.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Seu artigo não pôde ser atualizado.'));
    }

    $this->set('artigo', $artigo);
}
public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $artigo = $this->Artigos->get($id);
    if ($this->Artigos->delete($artigo)) {
        $this->Flash->success(__('O artigo com id: {0} foi deletado.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
}
}

?>