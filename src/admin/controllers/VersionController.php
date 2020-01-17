<?php


namespace yii2module\summary\admin\controllers;


use yii2lab\domain\web\ActiveController;

class VersionController extends ActiveController
{
	public $service = 'summary.version';
	public $formClass = 'yii2module\summary\admin\forms\VersionForm';
	public $titleName = 'name';
	const ACTION_CREATE = 'yii2module\summary\admin\actions\version\CreateAction';
	const ACTION_UPDATE = 'yii2module\summary\admin\actions\version\UpdateAction';


	public function actions()
	{
		$actions = parent::actions();
		$actions['index']['render'] = 'index';
		$actions['create']['class'] = self::ACTION_CREATE;

		$actions['update']['class'] = self::ACTION_UPDATE;
		unset($actions['view']);
		return $actions;
	}
}