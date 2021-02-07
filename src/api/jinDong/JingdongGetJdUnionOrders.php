<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**京东联盟订单查询接口
 * @url https://www.ecapi.cn/index/index/openapi/id/52.shtml?ptype=2
 * Class JingdongGetJdUnionOrders
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $time 查询时间，建议使用分钟级查询，格式：yyyyMMddHH、yyyyMMddHHmm或yyyyMMddHHmmss，如201811031212的查询范围从12:12:00--12:12:59 示例值：201811031212 
 * @property Number $type 订单时间查询类型(1：下单时间，2：完成时间，3：更新时间) 示例值：1 
 * @property Number $pageNo 第几页 示例值：1 
 * @property Number $pageSize 每页包含条数，上限为500 示例值：100 
 * @property String $key_id 京东联盟授权调用key，可在京东联盟授权列表获取 示例值：xxx 
 */
class JingdongGetJdUnionOrders extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'time', 'type', 'pageNo', 'pageSize', 'key_id'];

	public function call($data = [])
	{		
		return $this->request(self::JINGDONG_GETJDUNIONORDERS, $data);
	}
}