<?php

namespace yii2module\summary\admin\controllers;


use yii2lab\domain\web\ActiveController as Controller;

class BaseController extends Controller
{

    public $service = 'summary.summary';
    public $formClass = 'yii2module\summary\admin\forms\SummaryForm';
    public $titleName = 'name';
    const ACTION_CREATE = 'yii2module\summary\admin\actions\CreateSummaryAction';
    const ACTION_UPDATE = 'yii2module\summary\admin\actions\UpdateAction';


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
