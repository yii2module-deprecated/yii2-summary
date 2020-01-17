<?php

namespace yii2module\summary\admin\helpers;

use yii2lab\extension\menu\interfaces\MenuInterface;
use yii2lab\extension\common\helpers\ModuleHelper;

class Menu implements MenuInterface {

	public function toArray() {
		return [
			'label' => ['summary/main', 'app data'],
			'module' => 'summary',
			'items' => [
				[
					'label' => ['summary/main', 'title'],
					'url' => 'summary',
				],
				[
					'label' => ['summary/app_info', 'title'],
					'url' => 'summary/version',
				],
			],
		];
	}

}
