<?php


namespace yii2module\summary\admin\forms;


use Yii;
use yii2lab\domain\base\Model;

class VersionForm extends Model
{
	public $platform;
	public $api_version;
	public $min_app_version;
	public $max_app_version;
	public $is_deprecated;

	public function attributeLabels()
	{
		return [
			'platform' => Yii::t('summary/app_info', 'platform'),
			'api_version' => Yii::t('summary/app_info', 'api_version'),
			'min_app_version' => Yii::t('summary/app_info', 'min_app_version'),
			'max_app_version' => Yii::t('summary/app_info', 'max_app_version'),
			'is_deprecated' => Yii::t('summary/app_info', 'is_deprecated')
		];
	}

	public function rules()
	{
		return [
			[['platform', 'api_version', 'min_app_version', 'max_app_version', 'is_deprecated'], 'required'],
			[['api_version', 'min_app_version', 'max_app_version'], 'integer', 'min' => 0],
			[
				'max_app_version',
				function ($attribute) {
					if ($this->$attribute < $this->min_app_version) {
						$this->addError($attribute, Yii::t('summary/app_info', 'max_app_version not must be lower, than min_app_version'));
					}
				}
			],
		];
	}

}