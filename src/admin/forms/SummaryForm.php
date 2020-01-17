<?php

namespace yii2module\summary\admin\forms;

use Yii;
use yii2lab\domain\base\Model;

class SummaryForm extends Model {
	
	public $name;
	public $type;
	public $value;
	public $date_change;

	const SCENARIO_CREATE = 'create';


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
			['name', 'isSummaryExists', 'on' => self::SCENARIO_CREATE]
		];
	}

	public function isSummaryExists($attr)
	{
		$entity = \App::$domain->summary->summary->oneByName($this->$attr);
		return $entity ? $this->addError('name', Yii::t('summary/main', 'Record with this name already exists')) : true;
	}
}
