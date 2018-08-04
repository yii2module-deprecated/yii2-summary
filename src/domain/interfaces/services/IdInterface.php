<?php

namespace yii2module\summary\domain\interfaces\services;

interface IdInterface extends BaseInterface {
	
	public function generate($name, $uri);
	
}
