<?php

namespace yii2module\summary\admin\helpers;

use yii2lab\extension\menu\interfaces\MenuInterface;
use yii2lab\extension\common\helpers\ModuleHelper;

class Menu implements MenuInterface {

	public function toArray() {
		return [
			'label' => ['summary/main', 'title'],
			'module' => 'summary',
			'items' => [
				[
					'label' => ['summary/main', 'title'],
					'url' => 'summary',
				],
			],
		];
	}

}
