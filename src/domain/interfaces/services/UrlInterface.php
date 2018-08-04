<?php

namespace yii2module\summary\domain\interfaces\services;

interface UrlInterface extends BaseInterface {
	
	public function generate($name, $uri);
	
}
