<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**获取推广商品信息接口
 * @url https://www.ecapi.cn/index/index/openapi/id/24.shtml?ptype=2
 * Class JingdongGetPromotionItemInfo
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $skuids 京东skuID串，逗号分割，最多100个（非常重要请大家关注：如果输入的sk串中某个skuID的商品不在推广中[就是没有佣金]，返回结果中不会包含这个商品的信息 示例值：000000,11111 
 */
class JingdongGetPromotionItemInfo extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'skuids'];

	public function call($data = [])
	{		
		return $this->request(self::JINGDONG_GETPROMOTIONITEMINFO, $data);
	}
}