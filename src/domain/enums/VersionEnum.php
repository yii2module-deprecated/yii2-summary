<?php


namespace yii2module\summary\domain\enums;

use yii2lab\extension\enum\base\BaseEnum;

class VersionEnum extends BaseEnum
{
	const DEPRECATED = 1;

	const NOT_DEPRECATED = 0;
}