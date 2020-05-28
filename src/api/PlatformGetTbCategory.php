<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**淘宝商品分类API
 * Class PlatformGetTbCategory
 * @url https://open.21ds.cn/index/index/openapi/id/124.shtml?ptype=1
 * @package zfy\miao\api
 * @property String apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property Number cid 分类ID，默认为0，为顶级分类，输入分类ID后可查询该ID下的所有分类
 */
class PlatformGetTbCategory extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_GETTBCATEGORY, $data);
	}
}