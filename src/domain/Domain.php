<?php

namespace yii2module\summary\domain;

// todo: перенести в yii2module
use yii2lab\domain\enums\Driver;
use yii2module\summary\domain\services\StaticService;

/**
 * Class Domain
 * 
 * @package yii2module\summary\domain
 * @property \yii2module\summary\domain\interfaces\services\SummaryInterface $summary
 * @property \yii2module\summary\domain\interfaces\services\UrlInterface $url
 * @property-read \yii2module\summary\domain\interfaces\services\BaseInterface $base
 * @property-read \yii2module\summary\domain\interfaces\services\IdInterface $id
 * @property-read StaticService $static
 *
 */
class Domain extends \yii2lab\domain\Domain {
	
	public function config() {
		return [
			'repositories' => [
				'summary',
                'static' => Driver::FILEDB,
			],
			'services' => [
				'summary',
                'static',
				'url',
			],
		];
	}
	
}