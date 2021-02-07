<?php 

namespace zfy\miao\api\suNing; 

use zfy\miao\base\suNing\SuNingCall; 

/**单个查询联盟商品信息
 * @url https://www.ecapi.cn/index/index/openapi/id/224.shtml?ptype=7
 * Class SuningGetUnionItemInfo
 * @package zfy\miao\api\suNing
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $goodsCode 商品ID。商品ID 示例值：11758469966 
 */
class SuningGetUnionItemInfo extends SuNingCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'goodsCode'];

	public function call($data = [])
	{		
		return $this->request(self::SUNING_GETUNIONITEMINFO, $data);
	}
}