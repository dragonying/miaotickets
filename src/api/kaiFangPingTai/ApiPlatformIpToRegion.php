<?php 

namespace zfy\miao\api\kaiFangPingTai; 

use zfy\miao\base\kaiFangPingTai\KaiFangPingTaiCall; 

/**IP地址查询API
 * @url https://www.ecapi.cn/index/index/openapi/id/43.shtml?ptype=4
 * Class ApiPlatformIpToRegion
 * @package zfy\miao\api\kaiFangPingTai
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $ip IP地址 示例值：192.168.0.1 
 */
class ApiPlatformIpToRegion extends KaiFangPingTaiCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'ip'];

	public function call($data = [])
	{		
		return $this->request(self::API_PLATFORM_IPTOREGION, $data);
	}
}