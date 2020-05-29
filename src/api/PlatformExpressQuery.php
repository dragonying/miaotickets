<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**快递查询
 * @url https://open.21ds.cn/index/index/openapi/id/187.shtml?ptype=1
 * Class PlatformExpressQuery
 * @package zfy\miao\api
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String $express_no 快递单号，支持英文字母及数字
 */
class PlatformExpressQuery extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'express_no'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_EXPRESSQUERY, $data);
	}
}