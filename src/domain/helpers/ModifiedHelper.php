<?php

namespace yii2module\summary\domain\helpers;

use Yii;
use yii2lab\extension\common\helpers\Helper;

class ModifiedHelper {
	
	public static function getList() {
		$lastModifiedTables = \App::$domain->summary->summary->lastModifiedTables;
		$result = [];
		foreach($lastModifiedTables as $key => $config) {
			if(!empty($config['value'])) {
				$result[$key] = call_user_func($config['value']);
			} else {
				$fieldName = $config['field'];
				$tableName = $config['table'];
				$q = new yii\db\Query;
				$row = $q
					->select([$fieldName])
					->from($tableName)
					->orderBy([$fieldName => SORT_DESC])
					->limit(1)
					->one();
				$result[$key] = Helper::timeForApi($row[$fieldName]);
			}
		}
		return $result;
	}
	
}
