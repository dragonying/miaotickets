<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)淘口令解析商品ID API
 * @url https://open.21ds.cn/index/index/openapi/id/5.shtml?ptype=1
 * Class TaokeTpwdToId
 * @package zfy\miao\api
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String $tpwd 淘口令
 */
class TaokeTpwdToId extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'tpwd'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_TPWDTOID, $data);
	}
}