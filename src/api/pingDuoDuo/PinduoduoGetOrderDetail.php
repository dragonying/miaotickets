<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**拼多多订单详情API
 * @url https://www.ecapi.cn/index/index/openapi/id/20.shtml?ptype=3
 * Class PinduoduoGetOrderDetail
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $order_sn 订单号 示例值：xxxxx 
 * @property String $pdname 在本平台授权后的拼多多用户名 示例值：xxxxx 
 */
class PinduoduoGetOrderDetail extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'order_sn', 'pdname'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GETORDERDETAIL, $data);
	}
}