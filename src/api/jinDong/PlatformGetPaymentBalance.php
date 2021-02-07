<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**支付宝打款余额查询API
 * @url https://www.ecapi.cn/index/index/openapi/id/82.shtml?ptype=2
 * Class PlatformGetPaymentBalance
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 */
class PlatformGetPaymentBalance extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_GETPAYMENTBALANCE, $data);
	}
}