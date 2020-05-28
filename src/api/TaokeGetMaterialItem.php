<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**物料精选[猜你喜欢]
 * Class TaokeGetMaterialItem
 * @url https://open.21ds.cn/index/index/openapi/id/159.shtml?ptype=1
 * @package zfy\miao\api
 * @property String apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 */
class TaokeGetMaterialItem extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETMATERIALITEM, $data);
	}
}