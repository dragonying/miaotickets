<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**代付订单查询API
 * @url https://www.ecapi.cn/index/index/openapi/id/76.shtml?ptype=1
 * Class PlatformGetPaymentOrderList
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $ordersn 代付订单号或支付宝流水号或第三方订单号，传入该参数后将自动忽略其他参数 示例值：xxxxxx 
 * @property String $start_time 订单开始查询时间 示例值：2019-02-21+13%3a55%3a23 
 * @property String $end_time 订单结束查询时间 示例值：2019-02-21+13%3a55%3a23 
 * @property Number $page 页码，每页默认20条 示例值：1 
 */
class PlatformGetPaymentOrderList extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_GETPAYMENTORDERLIST, $data);
	}
}