<?php 

namespace zfy\miao\api\weiPinHui; 

use zfy\miao\base\weiPinHui\WeiPinHuiCall; 

/**根据关键词查询商品列表
 * @url https://www.ecapi.cn/index/index/openapi/id/192.shtml?ptype=5
 * Class VipGetUnionGoodsQuery
 * @package zfy\miao\api\weiPinHui
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $keyword 关键词 示例值：毛衣 
 * @property String $fieldName 排序字段 示例值： 
 * @property String $key 唯品会授权账号调用key，可在会员中心“唯品会授权列表”页获取，为V开头的字符串 示例值：Vxxxxxxx 
 * @property Number $order 排序顺序：0-正序，1-逆序，默认正序 示例值：1 
 * @property Number $page 页码 示例值：1 
 * @property Number $pageSize 页面大小：默认20,最大50 示例值：20 
 * @property String $priceStart 价格区间---start 示例值： 
 * @property String $priceEnd 价格区间---end 示例值： 
 * @property String $queryReputation 是否查询商品评价信息:默认不查询，该数据在详情页有返回，没有特殊需求，建议不查询，影响接口性能 示例值：false 
 * @property String $queryStoreServiceCapability 是否查询店铺服务能力信息：默认不查询，该数据在详情页有返回，没有特殊需求，建议不查询，影响接口性能 示例值：false 
 * @property String $queryStock 是否查询库存:默认不查询 示例值：false 
 * @property String $queryActivity 是否查询商品活动信息:默认不查询 示例值：false 
 * @property String $queryPrepay 是否查询商品预付信息:默认不查询 示例值：false 
 * @property String $plat  示例值：用户平台：1-PC,2-APP,3-小程序,不传默认为APP 
 * @property String $deviceType  示例值：设备号类型：IMEI，IDFA，OAID，有则传入 
 * @property String $deviceValue  示例值：设备号MD5加密后的值，有则传入 
 * @property String $ip  示例值：用户ip地址 
 * @property String $longitude  示例值：经度 如:29.590961456298828 
 * @property String $latitude  示例值：纬度 如:106.51573181152344 
 * @property String $chanTag  示例值：用户pid 
 * @property String $queryExclusiveCoupon 是否查询专属红包信息：默认不查询 示例值：true 
 */
class VipGetUnionGoodsQuery extends WeiPinHuiCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'keyword', 'key', 'page'];

	public function call($data = [])
	{		
		return $this->request(self::VIP_GETUNIONGOODSQUERY, $data);
	}
}