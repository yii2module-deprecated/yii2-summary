<?php

namespace yii2module\summary\domain\services;

use yii2module\summary\domain\interfaces\services\IdInterface;

class IdService extends BaseService implements IdInterface {
	
	const TYPE = 'id';
	
	public function generate($name, $uri) {
		$baseUrl = $this->oneByName($name);
		return $baseUrl . SL . $uri;
	}
	
}
