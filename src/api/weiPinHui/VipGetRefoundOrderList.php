<?php 

namespace zfy\miao\api\weiPinHui; 

use zfy\miao\base\weiPinHui\WeiPinHuiCall; 

/**获取维权订单列表
 * @url https://www.ecapi.cn/index/index/openapi/id/201.shtml?ptype=5
 * Class VipGetRefoundOrderList
 * @package zfy\miao\api\weiPinHui
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $key 唯品会授权账号调用key，可在会员中心“唯品会授权列表”页获取，为V开头的字符串 示例值：Vxxxxxxx 
 * @property String $searchType 查询类型:0-维权发起时间，1-维权完成时间（佣金扣除入账时间），2-佣金扣除结算时间 示例值：0 
 * @property Number $searchTimeStart 目标时间起始：时间戳，单位毫秒;当searchType=0时，为维权发起时间，当searchType=1时，为维权完成时间（佣金扣除入账时间），当searchType=2时，为佣金扣除结算时间 示例值：xxxx 
 * @property Number $searchTimeEnd 目标时间结束：时间戳，单位毫秒;当searchType=0时，为维权发起时间，当searchType=1时，为维权完成时间（佣金扣除入账时间），当searchType=2时，为佣金扣除结算时间 示例值：xxxx 
 * @property String $orderSns 目标订单号集合:当指定订单号集合时，目标时间区间可以不传,否则必须指定目标时间区间，多个单号以英文,分割 示例值：xxxx 
 * @property Number $page 当前页 示例值：1 
 * @property Number $pageSize 分页大小：默认20，最大100 示例值：20 
 */
class VipGetRefoundOrderList extends WeiPinHuiCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'key', 'searchType', 'page'];

	public function call($data = [])
	{		
		return $this->request(self::VIP_GETREFOUNDORDERLIST, $data);
	}
}