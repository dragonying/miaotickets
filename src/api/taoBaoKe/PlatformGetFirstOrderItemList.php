<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**首单礼金商品API
 * @url https://www.ecapi.cn/index/index/openapi/id/232.shtml?ptype=1
 * Class PlatformGetFirstOrderItemList
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $pagesize 每页数量 示例值：20 
 * @property String $itemid 商品id 示例值：xxxx 
 * @property String $cat 商品类目：0全部，1女装，2男装，3内衣，4美妆，5配饰，6鞋品，7箱包，8儿童，9母婴，10居家，11美食，12数码，13家电，14其他，15车品，16文体，17宠物 示例值： 
 * @property String $keyword 搜索词 示例值：xxxx 
 * @property Number $page 第几页，默认：1 示例值：1 
 */
class PlatformGetFirstOrderItemList extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'page'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_GETFIRSTORDERITEMLIST, $data);
	}
}