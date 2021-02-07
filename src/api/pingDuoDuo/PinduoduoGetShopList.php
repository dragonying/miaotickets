<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**多多客查店铺列表接口
 * @url https://www.ecapi.cn/index/index/openapi/id/80.shtml?ptype=3
 * Class PinduoduoGetShopList
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $mall_id_list 店铺id 示例值：1 
 * @property String $merchant_type_list 店铺类型 示例值： 
 * @property Number $query_range_str 查询范围0----商品拼团价格区间；1----商品券后价价格区间；2----佣金比例区间；3----优惠券金额区间；4----加入多多进宝时间区间；5----销量区间；6----佣金金额区间 示例值：0 
 * @property String $cat_id 商品类目ID 示例值： 
 * @property String $has_coupon 是否有优惠券（0所有；1必须有券。） 示例值：0 
 * @property Number $page_number 每页数量 示例值：10 
 * @property Number $page_size 分页数 示例值：10 
 * @property String $range_vo_list 筛选范围 示例值： 
 */
class PinduoduoGetShopList extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GETSHOPLIST, $data);
	}
}