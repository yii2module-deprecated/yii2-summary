<?php

use yii\helpers\Html;
$this->title = Yii::t('summary/app_info', 'create title');
?>
<div class="active-type-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>