<?php

namespace yii2module\summary\domain\services;

use Yii;
use yii\helpers\ArrayHelper;
use yii2lab\app\domain\helpers\EnvService;
use yii2lab\domain\data\Query;
use yii2lab\domain\services\base\BaseActiveService;
use yii2lab\domain\services\BaseService;
use yii2lab\extension\arrayTools\helpers\ArrayIterator;
use yii2module\summary\domain\entities\SummaryEntity;
use yii2module\summary\domain\enums\TypeEnum;
use yii2module\summary\domain\helpers\ModifiedHelper;
use yii2module\summary\domain\helpers\ResourceHelper;
use yii2module\summary\domain\interfaces\services\SummaryInterface;
use yii2module\summary\domain\repositories\ar\SummaryRepository;

class StaticService extends BaseActiveService {

}
