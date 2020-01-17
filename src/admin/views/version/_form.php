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
			<?= $form->field($model, 'platform')->textInput(['autofocus' => true]) ?>
	        <?= $form->field($model, 'api_version')->textInput() ?>
            <?= $form->field($model, 'min_app_version')->textInput() ?>
			<?= $form->field($model, 'max_app_version')->textInput() ?>
	        <?= $form->field($model, 'is_deprecated')->dropDownList(['0' => 'Нет', '1' => 'Да']) ?>


            <div class="form-group">
				<?= Html::submitButton(Yii::t('action', 'send'), ['class' => 'btn btn-primary']) ?>
            </div>

			<?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
