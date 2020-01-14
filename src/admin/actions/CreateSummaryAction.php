<?php

namespace yii2module\summary\admin\actions;


use Yii;
use yii\bootstrap\ActiveForm;
use yii\web\Response;
use yii2lab\domain\base\Action;
use yii2lab\domain\exceptions\UnprocessableEntityHttpException;
use yii2lab\navigation\domain\widgets\Alert;
use yii2module\summary\admin\forms\SummaryForm;


class CreateSummaryAction extends Action
{

	public $serviceMethod = 'create';

	public function run()
	{
		$this->view->title = Yii::t('summary/main', 'create title');
		$model = $this->createForm();
		$model->setScenario(SummaryForm::SCENARIO_CREATE);
		if (Yii::$app->request->isPost && !$model->hasErrors()) {
			try {
				$this->runServiceMethod($model->toArray());
				\App::$domain->navigation->alert->create(['main', 'create_success'], Alert::TYPE_SUCCESS);
				return $this->redirect($this->baseUrl);
			} catch (UnprocessableEntityHttpException $e) {
				$model->addErrorsFromException($e);
			}
		}
		return $this->render('create', compact('model'));
	}



}
