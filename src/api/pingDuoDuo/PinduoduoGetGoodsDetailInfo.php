<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**获取商品详细信息
 * @url https://www.ecapi.cn/index/index/openapi/id/183.shtml?ptype=3
 * Class PinduoduoGetGoodsDetailInfo
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $goods_id_list 商品id 示例值：["4436867104"] 
 * @property String $pid 推广位id 示例值： 
 * @property String $custom_parameters 自定义参数 示例值： 
 * @property String $zs_duo_id 招商多多客ID 示例值： 
 * @property String $plan_type 佣金优惠券对应推广类型 示例值：3：专属 4：招商 
 * @property String $search_id 搜索id 示例值： 
 */
class PinduoduoGetGoodsDetailInfo extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'goods_id_list'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GETGOODSDETAILINFO, $data);
	}
}