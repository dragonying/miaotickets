<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**支付宝打款余额查询API
 * @url https://www.ecapi.cn/index/index/openapi/id/82.shtml?ptype=1
 * Class PlatformGetPaymentBalance
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 */
class PlatformGetPaymentBalance extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_GETPAYMENTBALANCE, $data);
	}
}