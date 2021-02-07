<?php 

namespace zfy\miao\api\weiPinHui; 

use zfy\miao\base\weiPinHui\WeiPinHuiCall; 

/**查询订单列表
 * @url https://www.ecapi.cn/index/index/openapi/id/200.shtml?ptype=5
 * Class VipGetOrderList
 * @package zfy\miao\api\weiPinHui
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $key 唯品会授权账号调用key，可在会员中心“唯品会授权列表”页获取，为V开头的字符串 示例值：Vxxxxxxx 
 * @property Number $page 页码 示例值：1 
 * @property Number $status 0-不合格，1-待定，2-已完结，该参数不设置默认代表全部状态 示例值：订单状态 
 * @property Number $orderTimeStart 单位毫秒 示例值：订单时间起始 时间戳 
 * @property Number $orderTimeEnd 单位毫秒 示例值：订单时间结束 时间戳 
 * @property Number $pageSize  示例值：页面大小：默认20 
 * @property Number $updateTimeStart 单位毫秒 示例值：更新时间-起始 时间戳 
 * @property Number $updateTimeEnd 单位毫秒 示例值：更新时间-结束 时间戳 
 * @property String $orderSnList 订单号列表：当传入订单号列表时，订单时间和更新时间区间可不传入，多个订单以英文,分割 示例值：xxxx 
 */
class VipGetOrderList extends WeiPinHuiCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'key', 'page'];

	public function call($data = [])
	{		
		return $this->request(self::VIP_GETORDERLIST, $data);
	}
}