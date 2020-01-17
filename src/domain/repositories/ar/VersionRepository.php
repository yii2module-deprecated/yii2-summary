<?php


namespace yii2module\summary\domain\repositories\ar;


use yii2lab\domain\repositories\ActiveArRepository;

class VersionRepository extends ActiveArRepository
{
	public function tableName() {
		return 'app_info';
	}
}