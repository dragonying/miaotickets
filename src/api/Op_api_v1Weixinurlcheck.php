<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**微信封禁域名检测 API
 * Class Op_api_v1Weixinurlcheck
 * @url https://open.21ds.cn/index/index/openapi/id/48.shtml?ptype=1
 * @package zfy\miao\api
 * @property String apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String url 检测的域名
 */
class Op_api_v1Weixinurlcheck extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'url'];

	public function call($data = [])
	{		
		return $this->request(self::OP_API_V1_WEIXINURLCHECK, $data);
	}
}