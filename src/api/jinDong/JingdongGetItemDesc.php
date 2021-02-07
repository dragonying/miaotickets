<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**京东商品详情页API
 * @url https://www.ecapi.cn/index/index/openapi/id/65.shtml?ptype=2
 * Class JingdongGetItemDesc
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $skuid 京东skuID串 示例值：32401385658 
 */
class JingdongGetItemDesc extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'skuid'];

	public function call($data = [])
	{		
		return $this->request(self::JINGDONG_GETITEMDESC, $data);
	}
}