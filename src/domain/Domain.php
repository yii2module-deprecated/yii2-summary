<?php

namespace yii2module\summary\domain;

use yii2lab\domain\enums\Driver;
use yii2module\summary\domain\services\StaticService;

/**
 * Class Domain
 * 
 * @package yii2module\summary\domain
 * @property-read \yii2module\summary\domain\interfaces\services\BaseInterface $base
 * @property-read \yii2module\summary\domain\interfaces\services\IdInterface $id
 * @property-read StaticService $static
 * @property-read \yii2module\summary\domain\interfaces\services\SummaryInterface $summary
 * @property-read \yii2module\summary\domain\interfaces\services\UrlInterface $url
 */
class Domain extends \yii2lab\domain\Domain {
	
	public function config() {
		return [
			'repositories' => [
				'summary',
                'static' => Driver::FILEDB,
				'version'
			],
			'services' => [
				'summary',
                'static',
				'url',
				'version'
			],
		];
	}
	
}