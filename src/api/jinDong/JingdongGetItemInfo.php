<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**获取商品综合信息
 * @url https://www.ecapi.cn/index/index/openapi/id/98.shtml?ptype=2
 * Class JingdongGetItemInfo
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $skuid 商品id 示例值：100003961325 
 */
class JingdongGetItemInfo extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'skuid'];

	public function call($data = [])
	{		
		return $this->request(self::JINGDONG_GETITEMINFO, $data);
	}
}