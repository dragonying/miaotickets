<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**多多进宝商品推荐API
 * @url https://www.ecapi.cn/index/index/openapi/id/230.shtml?ptype=3
 * Class PinduoduoGetRecommendGoodsList
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $channel_type 0-1.9包邮,1-今日爆款,2-品牌好货,3-相似商品推荐,4-猜你喜欢,5-实时热销,6-实时收益,7-今日畅销,8-高佣榜单，默认1 示例值：0 
 * @property String $custom_parameters 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；格式为：{"uid":"11111","sid":"22222"}，其中uid用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填；sid上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key 示例值：{"uid":"11111","sid":"22222&amp;q 
 * @property Number $limit 请求数量；默认值：50 示例值：50 
 * @property String $list_id 翻页时建议填写前页返回的list_id值 示例值： 
 * @property String $offset 从多少位置开始请求；默认值：0，offset需是limit的整数倍，仅支持整页翻页 示例值： 
 * @property String $pid  示例值：推广位id 
 * @property Number $cat_id 猜你喜欢场景的商品类目，20100-百货，20200-母婴，20300-食品，20400-女装，20500-电器，20600-鞋包，20700-内衣，20800-美妆，20900-男装，21000-水果，21100-家纺，21200-文具,21300-运动,21400-虚拟,21500-汽车,21600-家装,21700-家具,21800-医药; 示例值：20100 
 * @property String $goods_ids 相似商品推荐场景时必传。商品Id，请求相似商品时，仅取数组的第一位 示例值： 
 */
class PinduoduoGetRecommendGoodsList extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GETRECOMMENDGOODSLIST, $data);
	}
}