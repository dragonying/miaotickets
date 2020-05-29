<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**IP地址查询API
 * @url https://open.21ds.cn/index/index/openapi/id/43.shtml?ptype=1
 * Class ApiPlatformIpToLocation
 * @package zfy\miao\api
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String $ip IP地址
 */
class ApiPlatformIpToLocation extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'ip'];

	public function call($data = [])
	{		
		return $this->request(self::API_PLATFORM_IPTOLOCATION, $data);
	}
}