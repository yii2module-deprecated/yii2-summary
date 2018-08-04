<?php

namespace yii2module\summary\domain\interfaces\services;

/**
 * Interface SummaryInterface
 *
 * @package yii2module\summary\domain\interfaces\services
 *
 * @property \yii2module\summary\domain\repositories\ar\SummaryRepository $repository
 */
interface SummaryInterface {
	
	public function getStaticUrl($name);
	public function oneByName($name);
	
}
