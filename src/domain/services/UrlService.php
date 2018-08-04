<?php

namespace yii2module\summary\domain\services;

use yii2module\summary\domain\interfaces\services\UrlInterface;

class UrlService extends BaseService implements UrlInterface {
	
	const TYPE = 'url';
	
	public function generate($name, $uri) {
		$baseUrl = $this->oneByName($name);
		return $baseUrl . SL . $uri;
	}
	
}
