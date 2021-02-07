<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**获取简版淘客商品信息API
 * @url https://www.ecapi.cn/index/index/openapi/id/11.shtml?ptype=1
 * Class TaokeGetItemInfo
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $itemid 商品ID 示例值：568706761354 
 */
class TaokeGetItemInfo extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'itemid'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETITEMINFO, $data);
	}
}