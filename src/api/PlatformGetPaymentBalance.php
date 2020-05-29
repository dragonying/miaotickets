<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)支付宝打款余额查询API
 * Class PlatformGetPaymentBalance
 * @url https://open.21ds.cn/index/index/openapi/id/82.shtml?ptype=1
 * @package zfy\miao\api
 * @property String apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 */
class PlatformGetPaymentBalance extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_GETPAYMENTBALANCE, $data);
	}
}