<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**万能淘口令解析API(付费版)
 * @url https://www.ecapi.cn/index/index/openapi/id/47.shtml?ptype=1
 * Class TaokeTpwdDecrypt
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $kouling 淘口令 示例值：￥B4Y7bZforau￥ 
 */
class TaokeTpwdDecrypt extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'kouling'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_TPWD_DECRYPT, $data);
	}
}