<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**生成单品推广小程序二维码
 * @url https://www.ecapi.cn/index/index/openapi/id/22.shtml?ptype=3
 * Class PinduoduoCreateSmartAppPromotionQrcode
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $goods_id_list 商品ID，仅支持单个查询 示例值： 
 * @property String $pdname 在本平台授权后的拼多多用户名 示例值：xxxxx 
 * @property String $p_id 推广位ID 示例值：xxxxx 
 * @property String $custom_parameters 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节。 示例值：xxxxx 
 * @property String $zs_duo_id 招商多多客ID 示例值： 
 */
class PinduoduoCreateSmartAppPromotionQrcode extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'goods_id_list', 'pdname', 'p_id'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_CREATESMARTAPPPROMOTIONQRCODE, $data);
	}
}