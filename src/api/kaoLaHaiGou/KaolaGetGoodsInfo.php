<?php 

namespace zfy\miao\api\kaoLaHaiGou; 

use zfy\miao\base\kaoLaHaiGou\KaoLaHaiGouCall; 

/**根据商品ID查询商品信息
 * @url https://www.ecapi.cn/index/index/openapi/id/253.shtml?ptype=10
 * Class KaolaGetGoodsInfo
 * @package zfy\miao\api\kaoLaHaiGou
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $goodsIds 商品ID列表，多个ID用英文逗号分隔，每次最多限制20 示例值：xxxx 
 * @property String $trackingCode1 可用于跟踪，订单接口中会输出此参数 示例值：xxxx 
 * @property String $trackingCode2 可用于跟踪，订单接口中会输出此参数 示例值：xxxx 
 * @property String $type 0按照goodsIds维度（默认）1按照goodsUrl 示例值：0 
 * @property String $goodsUrl 解析出url中商品ID，每次只能传一个 示例值： 
 * @property String $needShortLink 是否需要短链接N:不需要（响应速度快）其他：需要 示例值： 
 * @property String $needGroupBuyInfo 是否需要拼团信息N:不需要其他：需要 示例值： 
 */
class KaolaGetGoodsInfo extends KaoLaHaiGouCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'goodsIds'];

	public function call($data = [])
	{		
		return $this->request(self::KAOLA_GETGOODSINFO, $data);
	}
}