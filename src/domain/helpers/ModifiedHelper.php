<?php

namespace yii2module\summary\domain\helpers;

use yii2module\summary\domain\models\Resource;
use yii2lab\helpers\Helper;
//use yii2woop\service\domain\v1\models\Category;
//use yii2woop\service\domain\v1\models\Service;

class ModifiedHelper {
	
	public static function getList() {
		$lastDateForGeo = Helper::timeForApi(TIMESTAMP);
		$dateList = [
			'city' => $lastDateForGeo,
			'country' => $lastDateForGeo,
			'region' => $lastDateForGeo,
			//'summary_url' => self::getLastDateFromResource('type'),
			//'summary_id' => self::getLastDateFromResource('type'),
			//'service' => self::getLastDate(Service::class, 'modify_date'),
			//'service_category' => self::getLastDate(Category::class, 'modify_date'),
		];
		foreach($dateList as &$date) {
			$date = Helper::timeForApi($date);
		}
		return $dateList;
	}
	
	protected static function getLastDateFromResource($type, $field = 'date_change') {
		$lastItem = Resource::find()->where([$type => 'url'])->orderBy($field . ' DESC')->one();
		return $lastItem->$field;
	}
	
	protected static function getLastDate($modelClass, $field = 'date_change') {
		$lastItem = $modelClass::find()->orderBy($field . ' DESC')->one();
		if(is_object($lastItem)) {
			return $lastItem->$field;
		}
	}
	
}
