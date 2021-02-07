<?php 

namespace zfy\miao\base\pingDuoDuo; 

use zfy\miao\base\BaseCall; 

/**
 * Class abstract\PingDuoDuoCall 
 * @package zfy\miao\pingDuoDuo
 */
abstract class PingDuoDuoCall extends BaseCall implements BaseLink
{

	public function __construct($config = [])
	{		
		parent::__construct($config);
	}
	protected function buildParam(array $data = [])
	{		
		$this->requestParam = array_merge($this->getRequestParam(), $data);
			
		/** 用户apkey */		
		$this->needApkey && !isset($this->requestParam[self::USER_AP_KEY_NAME]) && $this->requestParam[self::USER_AP_KEY_NAME] = $this->getUserApkey();
			
		return $this->requestParam;
	}
}