<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**抖货商品API
 * @url https://www.ecapi.cn/index/index/openapi/id/231.shtml?ptype=1
 * Class PlatformGetTrillItemList
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $page 第几页，默认：1 示例值：1 
 * @property String $keyword 搜索词 示例值：xxxx 
 * @property String $sort 排序方式，desc=倒序，asc=正序 示例值：xxxx 
 * @property String $field 排序字段。today.今日销量；2hours.两小时销量 示例值：xxxx 
 * @property String $cat 商品类目：0全部，1女装，2男装，3内衣，4美妆，5配饰，6鞋品，7箱包，8儿童，9母婴，10居家，11美食，12数码，13家电，14其他，15车品，16文体，17宠物 示例值： 
 * @property String $itemid 商品id 示例值：xxxx 
 * @property Number $pagesize 每页数量 示例值：20 
 */
class PlatformGetTrillItemList extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'page'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_GETTRILLITEMLIST, $data);
	}
}