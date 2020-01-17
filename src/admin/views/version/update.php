<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model \yii2module\summary\admin\forms\VersionForm */
$this->title = Yii::t('summary/app_info', 'update title');

 ?>

<div class="active-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

