<?php
declare(strict_types=1);
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

Class MyflowerController extends AppController{


	public function show() {
		$myflowers = TableRegistry::getTableLocator()->get('Myflowers');
		$query = $myflowers->find('all', ['contain' => ['occasions']]);

		$this->set('query', $query);

	}
}
