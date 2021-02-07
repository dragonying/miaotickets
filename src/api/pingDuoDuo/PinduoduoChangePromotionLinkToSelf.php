<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**生成招商推广链接[招商推广链接转换]
 * @url https://www.ecapi.cn/index/index/openapi/id/19.shtml?ptype=3
 * Class PinduoduoChangePromotionLinkToSelf
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $pid 推广位ID 示例值：xxxxx 
 * @property String $source_url 需转链的链接 示例值：xxxxx 
 * @property String $pdname 在本平台授权后的拼多多用户名 示例值：xxxxx 
 * @property String $generate_schema_url 是否返回schemaURL，true=是，false=否 示例值：true 
 */
class PinduoduoChangePromotionLinkToSelf extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'pid', 'source_url', 'pdname'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_CHANGEPROMOTIONLINKTOSELF, $data);
	}
}