<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**[新]查询拼多多推广商品API
 * @url https://www.ecapi.cn/index/index/openapi/id/259.shtml?ptype=3
 * Class PinduoduoGoodsSearch
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $pdname 在本平台授权的拼多多账户名 示例值：13211111111 
 * @property Number $page 页码 示例值：1 
 * @property String $page_size 每页数量 示例值：10 
 * @property String $activity_tags 活动商品标记数组，例：[4,7]，4-秒杀，7-百亿补贴，31-品牌黑标，10564-精选爆品-官方直推爆款，10584-精选爆品-团长推荐，24-品牌高佣，20-行业精选，21-金牌商家，10044-潜力爆品，10475-爆品上新，10666-开年暖心补贴类目，其他的值请忽略 示例值：4,7,31 
 * @property String $cat_id 商品类目ID，使用pdd.goods.cats.get接口获取 示例值： 
 * @property String $custom_parameters 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；格式为：{"uid":"11111","sid":"22222"}，其中uid用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填；sid上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key 示例值：{"uid":"11111","sid":"22222&amp;q 
 * @property String $goods_sign_list goodsSign列表，支持通过goodsSign查询商品，使用说明：https://jinbao.pinduoduo.com/qa-system?questionId=252 示例值：xxxx,aaaaa,bbbb 
 * @property String $is_brand_goods 是否为品牌商品 示例值：true 
 * @property String $keyword 商品关键词，与opt_id字段选填一个或全部填写。可支持短链 示例值： 
 * @property String $list_id 翻页时建议填写前页返回的list_id值 示例值： 
 * @property String $merchant_type 店铺类型，1-个人，2-企业，3-旗舰店，4-专卖店，5-专营店，6-普通店（未传为全部） 示例值：2 
 * @property String $merchant_type_list 店铺类型，多个,分隔 示例值： 
 * @property String $opt_id 商品标签类目ID 示例值： 
 * @property String $pid 推广位id 示例值： 
 * @property String $range_from 筛选范围区间的开始值 示例值： 
 * @property String $range_id 筛选范围，1-券后价；2-佣金比例；5-销量；6-佣金金额 示例值： 
 * @property String $range_to 筛选范围区间的结束值 示例值： 
 * @property String $sort_type 排序方式:0-综合排序;2-按佣金比例降序;3-按价格升序;4-按价格降序;6-按销量降序;9-券后价升序排序;10-券后价降序排序;16-店铺描述评分降序 示例值：0 
 * @property String $with_coupon 是否只返回优惠券的商品，false返回所有商品，true只返回有优惠券的商品 示例值：true 
 * @property String $block_cats 自定义屏蔽一级/二级/三级类目ID，自定义数量不超过20个;使用pdd.goods.cats.get接口获取cat_id 示例值：aaa,bbb,ccc 
 * @property String $block_cat_packages 屏蔽商品类目包：1-拼多多小程序屏蔽的类目&amp;关键词;2-虚拟类目;3-医疗器械;4-处方药;5-非处方药 示例值：1,2,3 
 */
class PinduoduoGoodsSearch extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'pdname', 'page', 'page_size'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GOODSSEARCH, $data);
	}
}