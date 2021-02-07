<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**获取商品基础信息
 * @url https://www.ecapi.cn/index/index/openapi/id/182.shtml?ptype=3
 * Class PinduoduoGetGoodsBasicInfo
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $goods_id_list 商品id 示例值：["4436867104","55325549743"] 
 */
class PinduoduoGetGoodsBasicInfo extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'goods_id_list'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GETGOODSBASICINFO, $data);
	}
}