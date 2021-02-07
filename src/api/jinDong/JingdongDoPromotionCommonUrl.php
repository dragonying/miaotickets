<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**京东通用转链API
 * @url https://www.ecapi.cn/index/index/openapi/id/68.shtml?ptype=2
 * Class JingdongDoPromotionCommonUrl
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $materialId 推广物料，如链接带&amp;符号，需要进行Urlencode编码 示例值：https://item.jd.com/23484023378.html 
 * @property Number $siteId 站点id 示例值：132456 
 * @property Number $positionId 推广位id 示例值：132456 
 * @property String $pid 联盟子站长身份标识，格式：子站长ID_子站长网站ID_子站长推广位ID，一般用不到 示例值： 
 */
class JingdongDoPromotionCommonUrl extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'materialId', 'siteId'];

	public function call($data = [])
	{		
		return $this->request(self::JINGDONG_DOPROMOTIONCOMMONURL, $data);
	}
}