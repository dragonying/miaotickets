<?php 

namespace zfy\miao\api\kaoLaHaiGou; 

use zfy\miao\base\kaoLaHaiGou\KaoLaHaiGouCall; 

/**考拉订单
 * @url https://www.ecapi.cn/index/index/openapi/id/257.shtml?ptype=10
 * Class KaolaOrder
 * @package zfy\miao\api\kaoLaHaiGou
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $tc1 渠道参数1 示例值：xxxx 
 * @property String $tc2 渠道参数2 示例值：xxxx 
 * @property String $time_from 订单查询开始时间，空格以+代替或者进行urlencode编码 示例值：xxxx 
 * @property String $time_to 订单查询结束时间，订单开始时间至订单结束时间，中间时间段要求不超过3个小时！空格以+代替或者进行urlencode编码 示例值：xx 
 * @property String $pay_from 订单支付开始时间 示例值：xxxx 
 * @property String $pay_to 订单支付结束时间 示例值：xxxxx 
 * @property Number $status 订单状态1已支付2已发货3交易成功4交易失败 示例值：3 
 * @property Number $page 页码 示例值：1 
 * @property String $pageSize 每页数量 示例值：20 
 */
class KaolaOrder extends KaoLaHaiGouCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'page', 'pageSize'];

	public function call($data = [])
	{		
		return $this->request(self::KAOLA_ORDER, $data);
	}
}