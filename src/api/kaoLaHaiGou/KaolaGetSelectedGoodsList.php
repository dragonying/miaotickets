<?php 

namespace zfy\miao\api\kaoLaHaiGou; 

use zfy\miao\base\kaoLaHaiGou\KaoLaHaiGouCall; 

/**获取精选商品列表
 * @url https://www.ecapi.cn/index/index/openapi/id/252.shtml?ptype=10
 * Class KaolaGetSelectedGoodsList
 * @package zfy\miao\api\kaoLaHaiGou
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $poolName 精选商品池名称1-每日平价商品2-高佣必推商品3-新人专享商品4-会员专属商品5-低价包邮商品6-考拉自营爆款7-考拉商家爆款8-黑卡用户最爱买商品9-美妆个护热销品10-食品保健热销品11-母婴热销品12-时尚热销品13-家居宠物热销品14-每日秒杀商品15-黑卡好价商品16-高转化好物商品17-开卡一单省回商品18-会员专属促销选品池 示例值：1 
 * @property Number $pageNo 页码 示例值：1 
 * @property Number $pageSize 每页数量默认200（最大值）最小20 示例值：20 
 */
class KaolaGetSelectedGoodsList extends KaoLaHaiGouCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'poolName'];

	public function call($data = [])
	{		
		return $this->request(self::KAOLA_GETSELECTEDGOODSLIST, $data);
	}
}