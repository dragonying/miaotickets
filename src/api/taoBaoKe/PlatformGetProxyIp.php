<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**代理IP
 * @url https://www.ecapi.cn/index/index/openapi/id/38.shtml?ptype=1
 * Class PlatformGetProxyIp
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $nums 查询数量，最大50，默认为10 示例值：10 
 */
class PlatformGetProxyIp extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'nums'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_GETPROXYIP, $data);
	}
}