<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**淘宝商品分类API
 * @url https://www.ecapi.cn/index/index/openapi/id/124.shtml?ptype=1
 * Class PlatformGetTbCategory
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $cid 分类ID，默认为0，为顶级分类，输入分类ID后可查询该ID下的所有分类 示例值：0 
 */
class PlatformGetTbCategory extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_GETTBCATEGORY, $data);
	}
}