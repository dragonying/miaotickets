<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)淘口令解析API
 * Class TaokeJiexitkl
 * @url https://open.21ds.cn/index/index/openapi/id/2.shtml?ptype=1
 * @package zfy\miao\api
 * @property String apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String kouling 淘口令
 */
class TaokeJiexitkl extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'kouling'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_JIEXITKL, $data);
	}
}