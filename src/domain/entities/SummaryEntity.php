<?php

namespace yii2module\summary\domain\entities;

use yii2lab\domain\BaseEntity;
use yii2lab\domain\values\TimeValue;

class SummaryEntity extends BaseEntity {

    protected $id;
	protected $name;
	protected $type;
	protected $value;
	protected $date_change;
	
	public function fieldType() {
		return [
			'date_change' => TimeValue::class,
		];
	}
}
