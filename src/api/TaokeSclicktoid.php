<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)sclick链接解析api
 * @url https://open.21ds.cn/index/index/openapi/id/45.shtml?ptype=1
 * Class TaokeSclicktoid
 * @package zfy\miao\api
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String $sclickurl 淘宝长链接或短链接
 */
class TaokeSclicktoid extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'sclickurl'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_SCLICKTOID, $data);
	}
}