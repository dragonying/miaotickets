<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)获取简版淘客商品信息API
 * Class TaokeGetItemInfo
 * @url https://open.21ds.cn/index/index/openapi/id/11.shtml?ptype=1
 * @package zfy\miao\api
 * @property String apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String itemid 商品ID
 */
class TaokeGetItemInfo extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'itemid'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETITEMINFO, $data);
	}
}