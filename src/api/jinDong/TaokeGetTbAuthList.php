<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**获取授权淘客帐号列表
 * @url https://www.ecapi.cn/index/index/openapi/id/13.shtml?ptype=2
 * Class TaokeGetTbAuthList
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 */
class TaokeGetTbAuthList extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETTBAUTHLIST, $data);
	}
}