<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**淘宝标题分词 API
 * @url https://www.ecapi.cn/index/index/openapi/id/41.shtml?ptype=1
 * Class PlatformTitlefc
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $title 商品标题 示例值：卫衣男士长袖T恤套头加绒加厚秋冬款宽松秋衣服大码冬季打底衫潮 
 */
class PlatformTitlefc extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'title'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_TITLEFC, $data);
	}
}