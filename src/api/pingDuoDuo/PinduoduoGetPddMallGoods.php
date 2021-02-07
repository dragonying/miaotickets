<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**查询店铺商品
 * @url https://www.ecapi.cn/index/index/openapi/id/78.shtml?ptype=3
 * Class PinduoduoGetPddMallGoods
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $mall_id 店铺id 示例值：6052070 
 * @property Number $page_number 分页数 示例值：1 
 * @property String $page_size 每页商品数量 示例值：10 
 */
class PinduoduoGetPddMallGoods extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'mall_id', 'page_number', 'page_size'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GETPDDMALLGOODS, $data);
	}
}