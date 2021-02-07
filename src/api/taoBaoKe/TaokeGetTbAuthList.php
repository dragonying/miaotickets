<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**获取授权淘客帐号列表
 * @url https://www.ecapi.cn/index/index/openapi/id/13.shtml?ptype=1
 * Class TaokeGetTbAuthList
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 */
class TaokeGetTbAuthList extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETTBAUTHLIST, $data);
	}
}