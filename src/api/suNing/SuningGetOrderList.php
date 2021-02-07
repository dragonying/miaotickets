<?php 

namespace zfy\miao\api\suNing; 

use zfy\miao\base\suNing\SuNingCall; 

/**推广订单列表查询
 * @url https://www.ecapi.cn/index/index/openapi/id/223.shtml?ptype=7
 * Class SuningGetOrderList
 * @package zfy\miao\api\suNing
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $sub_user 子会员编码 示例值： 
 * @property String $time_from 开始时间 示例值： 
 * @property String $time_to 结束时间 示例值： 
 * @property String $status 订单状态：3=退款;2=支付完成;5=确认收货 示例值： 
 * @property Number $time_type 时间类型，1=订单提交时间；2=支付时间 示例值：1 
 * @property String $page 页码 示例值：1 
 * @property Number $pageSize 每页数量 示例值：10 
 */
class SuningGetOrderList extends SuNingCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'page', 'pageSize'];

	public function call($data = [])
	{		
		return $this->request(self::SUNING_GETORDERLIST, $data);
	}
}