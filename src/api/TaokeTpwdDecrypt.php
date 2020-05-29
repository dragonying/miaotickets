<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)淘口令解析API(付费版)
 * @url https://open.21ds.cn/index/index/openapi/id/47.shtml?ptype=1
 * Class TaokeTpwdDecrypt
 * @package zfy\miao\api
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String $kouling 淘口令
 */
class TaokeTpwdDecrypt extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'kouling'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_TPWD_DECRYPT, $data);
	}
}