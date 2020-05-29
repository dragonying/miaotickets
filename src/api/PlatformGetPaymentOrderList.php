<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**代付订单查询API
 * @url https://open.21ds.cn/index/index/openapi/id/76.shtml?ptype=1
 * Class PlatformGetPaymentOrderList
 * @package zfy\miao\api
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String $ordersn 代付订单号或支付宝流水号或第三方订单号，传入该参数后将自动忽略其他参数
 * @property String $start_time 订单开始查询时间
 * @property String $end_time 订单结束查询时间
 * @property Number $page 页码，每页默认20条
 */
class PlatformGetPaymentOrderList extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_GETPAYMENTORDERLIST, $data);
	}
}