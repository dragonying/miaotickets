<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**京粉精选商品查询接口
 * @url https://www.ecapi.cn/index/index/openapi/id/77.shtml?ptype=2
 * Class JingdongGetJfItems
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $eliteId 频道ID:1-好券商品,2-精选卖场,10-9.9包邮,15-京东配送,22-实时热销榜,23-为你推荐,24-数码家电,25-超市,26-母婴玩具,27-家具日用,28-美妆穿搭,30-图书文具,31-今日必推,32-京东好物,33-京东秒杀,34-拼购商品,40-高收益榜,41-自营热卖榜,109-新品首发,110-自营,112-京东爆品,125-首购商品,129-高佣榜单,130-视频商品,153-历史最低价商品榜 示例值：1 
 * @property Number $pageIndex 页码 示例值：1 
 * @property Number $pageSize 每页数量，上限50 示例值：20 
 * @property String $sortName 排序字段(price：单价,commissionShare：佣金比例,commission：佣金，inOrderCount30DaysSku：sku维度30天引单量，comments：评论数，goodComments：好评数) 示例值：price 
 * @property String $sort asc,desc升降序,默认降序 示例值：desc 
 * @property String $fields 支持出参数据筛选，逗号','分隔，目前可用：videoInfo,documentInfo 示例值：videoInfo,documentInfo 
 * @property String $forbidTypes 10微信京东购物小程序禁售，11微信京喜小程序禁售 示例值： 
 */
class JingdongGetJfItems extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'eliteId', 'pageIndex', 'pageSize'];

	public function call($data = [])
	{		
		return $this->request(self::JINGDONG_GETJFITEMS, $data);
	}
}