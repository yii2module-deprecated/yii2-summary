<?php



/* @var $model yii2module\summary\admin\forms\SummaryForm */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

\App::$domain->navigation->breadcrumbs->create($this->title);

?>
<div class="send-email">

    <div class="row">
        <div class="col-lg-5">
			<?php $form = ActiveForm::begin(); ?>
			<?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'type')->dropDownList(['id' => 'id', 'url' => 'url']) ?>
			<?= $form->field($model, 'value')->textInput() ?>

            <div class="form-group">
				<?= Html::submitButton(Yii::t('action', 'send'), ['class' => 'btn btn-primary']) ?>
            </div>

			<?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
