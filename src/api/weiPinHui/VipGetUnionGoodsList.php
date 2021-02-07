<?php 

namespace zfy\miao\api\weiPinHui; 

use zfy\miao\base\weiPinHui\WeiPinHuiCall; 

/**获取联盟在推商品列表
 * @url https://www.ecapi.cn/index/index/openapi/id/191.shtml?ptype=5
 * Class VipGetUnionGoodsList
 * @package zfy\miao\api\weiPinHui
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $key 唯品会授权账号调用key，可在会员中心“唯品会授权列表”页获取，为V开头的字符串 示例值：Vxxxxxxx 
 * @property Number $page 页码 示例值：1 
 * @property Number $pageSize 分页大小:默认20，最大100 示例值：20 
 * @property String $queryReputation 是否查询商品评价信息:默认不查询，该数据在详情页有返回，没有特殊需求，建议不查询 示例值：false 
 * @property String $queryStoreServiceCapability 是否查询店铺服务能力信息:默认不查询，该数据在详情页有返回，没有特殊需求，建议不查询 示例值：false 
 * @property Number $sourceType 请求源类型：0-频道，1-组货 示例值：0 
 * @property String $jxCode 精选组货码：当请求源类型为组货时必传 示例值： 
 * @property String $fieldName 排序字段:COMMISSION-佣金，PRICE-价格,COMM_RATIO-佣金比例，DISCOUNT-折扣 示例值：COMMISSION 
 * @property Number $order 排序顺序：0-正序，1-逆序，默认正序 示例值：1 
 * @property String $queryStock 是否查询库存:默认不查询 示例值：false 
 * @property String $queryActivity 是否查询商品活动信息:默认不查询 示例值：false 
 * @property String $queryPrepay 是否查询商品预付信息:默认不查询 示例值：false 
 * @property String $channelType 频道类型:0-超高佣，1-出单爆款，2-每日精选;当请求类型为频道时必传 示例值：0 
 */
class VipGetUnionGoodsList extends WeiPinHuiCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'key', 'page'];

	public function call($data = [])
	{		
		return $this->request(self::VIP_GETUNIONGOODSLIST, $data);
	}
}