<?php

namespace yii2module\summary\domain\services;

use Yii;
use yii\helpers\ArrayHelper;
use yii2lab\app\domain\helpers\EnvService;
use yii2lab\domain\data\Query;
use yii2lab\domain\services\BaseService;
use yii2lab\extension\arrayTools\helpers\ArrayIterator;
use yii2module\summary\domain\entities\SummaryEntity;
use yii2module\summary\domain\enums\TypeEnum;
use yii2module\summary\domain\helpers\ModifiedHelper;
use yii2module\summary\domain\helpers\ResourceHelper;
use yii2module\summary\domain\interfaces\services\SummaryInterface;
use yii2module\summary\domain\repositories\ar\SummaryRepository;

/**
 * Class SummaryService
 *
 * @package yii2module\summary\domain\services
 *
 * @property SummaryRepository $repository
 */
class SummaryService extends BaseService implements SummaryInterface {
	
	public $lastModifiedTables = [];
	
	private $cache;
	
	public function map() {
		return [
			'id' => $this->dictionaryByType(TypeEnum::ID),
			'url' => $this->dictionaryByType(TypeEnum::URL),
			'last_modified' => ModifiedHelper::getList(),
		];
	}
	
	private function dictionaryByType($type) {
		$collection = $this->repository->allByType($type);
		return ResourceHelper::collectionToMap($collection);
	}
	
	public function getStaticUrl($name) {
		$avatarUrl = $this->oneByName($name);
		return EnvService::getStaticUrl($avatarUrl);
	}
	
	public function oneByName($name) {
		$dictionary = $this->dictionary();
		return ArrayHelper::getValue($dictionary, $name);
	}
	
	private function dictionary() {
		if(!isset($this->cache)) {
			$collection = $this->repository->all();
			if(empty($collection)) {
				return null;
			}
			$this->cache = ArrayHelper::map($collection, 'name', 'value');
		}
		return $this->cache;
	}
	
}
