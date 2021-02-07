<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**查询拼多多推广商品API
 * @url https://www.ecapi.cn/index/index/openapi/id/10.shtml?ptype=3
 * Class PinduoduoGetpdditem
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $optid 商品标签类目ID，可通过：http://openapi.weimohe.cn/index/index/openapi/id/60.shtml?ptype=3获取 示例值：1 
 * @property String $keyword 商品关键词，与opt_id字段选填一个或全部填写，不支持纯数字(goods_id)搜索 示例值：衣服 
 * @property Number $page 页码 示例值：1 
 * @property Number $pagesize 每页数据多少条，10~100 示例值：100 
 * @property String $coupon 是否只返含有优惠券的商品，true，是，false，否 示例值：true 
 * @property Number $sort 排序；排序方式:0-综合排序;1-按佣金比率升序;2-按佣金比例降序;3-按价格升序;4-按价格降序;5-按销量升序;6-按销量降序;7-优惠券金额排序升序;8-优惠券金额排序降序;9-券后价升序排序;10-券后价降序排序;11-按照加入多多进宝时间升序;12-按照加入多多进宝时间降序;13-按佣金金额升序排序;14-按佣金金额降序排序;15-店铺描述评分升序;16-店铺描述评分降序;17-店铺物流评分升序;18-店铺物流评分降序;19-店铺服务评分升序;20-店铺服务评分降序;27-描述评分击败同类店铺百分比升序，28-描述评分击败同类店铺百分比降序，29-物流评分击败同类店铺百分比升序，30-物流评分击败同类店铺百分比降序，31-服务评分击败同类店铺百分比升序，32-服务评分击败同类店铺百分比降序 示例值：1 
 * @property String $range_list 范围列表，可选值：[{"range_id":0,"range_from":1,"range_to":1500},{"range_id":1,"range_from":1,"range_to":1500}] 示例值：[{"range_id":0,"range_from":1,"range_to 
 * @property Number $cat_id 商品类目ID，使用pdd.goods.cats.get接口获取 示例值： 
 * @property String $goods_id_list 已经废弃，不再支持该功能 示例值：3103875972,4710158125 
 * @property Number $zs_duo_id 招商多多客ID 示例值： 
 * @property Number $merchant_type 店铺类型，1-个人，2-企业，3-旗舰店，4-专卖店，5-专营店，6-普通店（未传为全部） 示例值：3 
 * @property String $pid 推广位id 示例值： 
 * @property String $custom_parameters 自定义参数 示例值： 
 * @property String $activity_tags 商品活动标记数组，例：[4,7]，4-秒杀7-百亿补贴等 示例值： 
 * @property String $is_brand_goods 是否为品牌商品 示例值： 
 * @property String $list_id 翻页时建议填写前页返回的list_id值 示例值： 
 */
class PinduoduoGetpdditem extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'page', 'pagesize', 'coupon', 'sort'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GETPDDITEM, $data);
	}
}