<?php 

namespace zfy\miao\api\kaiFangPingTai; 

use zfy\miao\base\kaiFangPingTai\KaiFangPingTaiCall; 

/**获取授权淘客帐号列表
 * @url https://www.ecapi.cn/index/index/openapi/id/13.shtml?ptype=4
 * Class TaokeGetTbAuthList
 * @package zfy\miao\api\kaiFangPingTai
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 */
class TaokeGetTbAuthList extends KaiFangPingTaiCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETTBAUTHLIST, $data);
	}
}