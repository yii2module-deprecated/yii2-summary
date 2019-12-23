<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\helpers\Html;
use yii2lab\extension\web\grid\ActionColumn;

$this->title = Yii::t('summary/main', 'title');


$baseUrl = $this->context->getBaseUrl();

$columns = [
	[
		'attribute' => 'name',
		'label' => Yii::t('summary/main', 'name'),
	],
	[
		'attribute' => 'type',
		'label' => Yii::t('summary/main', 'type'),
	],
	[
		'attribute' => 'value',
		'label' => Yii::t('summary/main', 'value'),
	],
	[
		'attribute' => 'date_change',
		'label' => Yii::t('summary/main', 'date_change'),
	],
	[
		'class' => ActionColumn::class,
		'template' => '{update} {delete}'
	],
];

?>

<?= GridView::widget([
	'dataProvider' => $dataProvider,
	'layout' => '{summary}{items}',
	'columns' => $columns,
]); ?>

<?= Html::a(Yii::t('action', 'create'), $baseUrl . 'create', ['class' => 'btn btn-success']) ?>