<?php

namespace yii2module\summary\domain\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class Resource extends ActiveRecord {
	
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return '{{%summary_resource}}';
	}
	
	public function behaviors() {
		return [
			'timestamp' => [
				'class' => TimestampBehavior::className(),
				'attributes' => [
					ActiveRecord::EVENT_BEFORE_INSERT => 'date_change',
					ActiveRecord::EVENT_BEFORE_UPDATE => 'date_change',
				],
				'value' => function () {
					return date('Y-m-d H:i:s');
				},
			],
		];
	}
	
}
