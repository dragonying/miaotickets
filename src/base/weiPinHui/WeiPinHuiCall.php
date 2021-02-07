<?php 

namespace zfy\miao\base\weiPinHui; 

use zfy\miao\base\BaseCall; 

/**
 * Class abstract\WeiPinHuiCall 
 * @package zfy\miao\weiPinHui
 */
abstract class WeiPinHuiCall extends BaseCall implements BaseLink
{
    //唯品会授权账号调用key
    const VIP_KEY     = 'key';
    protected $vipKey = 'V4775695872508360';

    protected $needKey = true;



	public function __construct($config = [])
	{		
		parent::__construct($config);
        isset($config[static::VIP_KEY]) && $this->setKey($config[static::VIP_KEY]);
    }
	protected function buildParam(array $data = [])
	{		
		$this->requestParam = array_merge($this->getRequestParam(), $data);
			
		/** 用户apkey */		
		$this->needApkey && !isset($this->requestParam[self::USER_AP_KEY_NAME]) && $this->requestParam[self::USER_AP_KEY_NAME] = $this->getUserApkey();

        /** 用户授权key*/
        $this->needKey && !isset($this->requestParam[self::VIP_KEY]) && $this->requestParam[self::VIP_KEY] = $this->getKey();


        return $this->requestParam;
	}


	protected function setKey($key){
        $this->vipKey = $key;
        return $this;
    }

    protected function getKey(){
        return $this->vipKey;
    }

}