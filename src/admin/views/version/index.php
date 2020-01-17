<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\helpers\Html;
use yii2lab\extension\web\grid\ActionColumn;
use yii2module\summary\domain\enums\VersionEnum;

$this->title = Yii::t('summary/app_info', 'title');


$baseUrl = $this->context->getBaseUrl();

$columns = [

	[
		'attribute' => 'platform',
		'label' => Yii::t('summary/app_info', 'platform'),
	],
	[
		'attribute' => 'api_version',
		'label' => Yii::t('summary/app_info', 'api_version'),
	],
	[
		'attribute' => 'min_app_version',
		'label' => Yii::t('summary/app_info', 'min_app_version'),
	],
	[
		'attribute' => 'max_app_version',
		'label' => Yii::t('summary/app_info', 'max_app_version'),
	],
	[
		'attribute' => 'is_deprecated',
		'label' => Yii::t('summary/app_info', 'is_deprecated'),
		'contentOptions' => function ($model) {
			switch ($model->is_deprecated) {
				case VersionEnum::NOT_DEPRECATED:
					return [
						'class' => "label label-success",
						'style' => 'display: inline-block; width: 100%'
					];
					break;
				case VersionEnum::DEPRECATED:
					return [
						'class' => "label label-danger",
						'style' => 'display: inline-block; width: 100%'
					];
					break;
			}
		},
		'value' => function ($model) {
			switch ($model->is_deprecated) {
				case VersionEnum::NOT_DEPRECATED:
					return Yii::t('summary/app_info', 'no');
					break;
				case VersionEnum::DEPRECATED:
					return Yii::t('summary/app_info', 'yes');
					break;
			}
		},
	],
	[
		'class' => ActionColumn::class,
		'template' => '{update} {delete}'
	],
];

?>

<?= GridView::widget([
	'dataProvider' => $dataProvider,
	'layout' => '{summary}{items}{pager}',
	'columns' => $columns,
]); ?>

<?= Html::a(Yii::t('action', 'create'), $baseUrl . 'create', ['class' => 'btn btn-success']) ?>