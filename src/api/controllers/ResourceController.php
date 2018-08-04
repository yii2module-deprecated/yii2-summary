<?php

namespace yii2module\summary\api\controllers;

use yii2lab\rest\domain\rest\ActiveControllerWithQuery as Controller;

/**
 * Class ResourceController
 *
 * @package yii2module\summary\api\controllers
 *
 * @property \yii2module\summary\domain\interfaces\services\SummaryInterface $service
 */
class ResourceController extends Controller
{
	
	public $service = 'summary.summary';
	
	public function actions() {
		$actions = parent::actions();
		$actions['index']['serviceMethod'] = 'map';
		return $actions;
	}
	
}
