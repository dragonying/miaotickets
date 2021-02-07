<?php 

namespace zfy\miao\api\suNing; 

use zfy\miao\base\suNing\SuNingCall; 

/**商品图文详情查询
 * @url https://www.ecapi.cn/index/index/openapi/id/218.shtml?ptype=7
 * Class SuningGetItemsImages
 * @package zfy\miao\api\suNing
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $commodityCode 商品编码 示例值：10073327418 
 * @property String $supplierCode 商家编码 示例值：0000000000 
 * @property String $terminalType 终端类型 示例值： 
 */
class SuningGetItemsImages extends SuNingCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'commodityCode', 'supplierCode'];

	public function call($data = [])
	{		
		return $this->request(self::SUNING_GETITEMSIMAGES, $data);
	}
}