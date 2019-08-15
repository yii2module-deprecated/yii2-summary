<?php

namespace yii2module\summary\admin\forms;

use Yii;
use yii2lab\domain\base\Model;

class SummaryForm extends Model {
	
	public $name;
	public $type;
	public $value;
	public $date_change;

	public function attributeLabels()
	{
		return [
			'name' => Yii::t('summary/main', 'name'),
			'type' => Yii::t('summary/main', 'type'),
			'value' => Yii::t('summary/main', 'value'),
			'date_change' => Yii::t('summary/main', 'date_change'),
		];
	}
	public function rules()
	{
		return [
			[['name', 'type', 'value'], 'required'],
		];
	}
}
