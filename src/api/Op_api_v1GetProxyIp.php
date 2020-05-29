<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**代理IP
 * Class Op_api_v1GetProxyIp
 * @url https://open.21ds.cn/index/index/openapi/id/38.shtml?ptype=1
 * @package zfy\miao\api
 * @property String apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String nums 查询数量，最大30，默认为10
 */
class Op_api_v1GetProxyIp extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::OP_API_V1_GETPROXYIP, $data);
	}
}