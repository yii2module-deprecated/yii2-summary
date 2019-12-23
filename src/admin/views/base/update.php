<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = Yii::t('summary/main', 'update title');

 ?>

<div class="active-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

