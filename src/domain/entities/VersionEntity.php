<?php


namespace yii2module\summary\domain\entities;


use yii2lab\domain\BaseEntity;

class VersionEntity extends BaseEntity
{
	protected $id;

	protected $platform;

	protected $api_version;

	protected $min_app_version;

	protected $max_app_version;

	protected $is_deprecated;

	public function setId(int $value)
	{
		$this->id = $value;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setPlatform(string $value)
	{
		$this->platform = $value;
	}

	public function getPlatform() : string
	{
		return $this->platform;
	}

	public function setApiVersion(int $value)
	{
		$this->api_version = $value;
	}

	public function getApiVersion() : int
	{
		return $this->api_version;
	}

	public function setMaxAppVersion(int $value)
	{
		$this->max_app_version = $value;
	}

	public function getMaxAppVersion() : int
	{
		return $this->max_app_version;
	}

	public function setMinAppVersion(int $value)
	{
		$this->min_app_version = $value;
	}

	public function getMinAppVersion() : int
	{
		return $this->min_app_version;
	}

	public function setIsDeprecated(bool $value)
	{
		$this->is_deprecated = $value;
	}

	public function getIsDeprecated() : bool
	{
		return $this->is_deprecated;
	}
}