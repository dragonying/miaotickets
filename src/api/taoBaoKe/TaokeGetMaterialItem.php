<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**专属店铺物料接口
 * @url https://www.ecapi.cn/index/index/openapi/id/159.shtml?ptype=1
 * Class TaokeGetMaterialItem
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 */
class TaokeGetMaterialItem extends TaoBaoKeCall
{

    protected $needApkey = true;
    protected $needPid = true;
    protected $needTbname = true;

	protected $requireKey = ['apkey','material_id'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETMATERIALITEM, $data);
	}
}