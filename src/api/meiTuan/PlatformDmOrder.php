<?php 

namespace zfy\miao\api\meiTuan; 

use zfy\miao\base\meiTuan\MeiTuanCall; 

/**订单获取接口
 * @url https://www.ecapi.cn/index/index/openapi/id/205.shtml?ptype=6
 * Class PlatformDmOrder
 * @package zfy\miao\api\meiTuan
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $eid 自定义订单反馈标签 示例值：xxxx 
 * @property Number $page 页码，最大500 示例值：1 
 * @property Number $pageSize 每页数量，上限100 示例值：1 
 * @property String $time_from 订单生成（下单）开始时间 示例值：2012-05-12 12:18:22 
 * @property String $time_to 订单生成（下单）结束时间 示例值：2012-05-12 15:18:22 
 * @property String $charge_from 订单结算开始时间 示例值：2012-05-12 12:18:22 
 * @property String $charge_to 订单结算结束时间 示例值：2012-05-12 15:18:22 
 * @property Number $status 查询特定状态的订单可选值：-1无效0未确认1确认2结算 示例值：0 
 */
class PlatformDmOrder extends MeiTuanCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'page', 'pageSize'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_DMORDER, $data);
	}
}