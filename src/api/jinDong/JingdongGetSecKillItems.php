<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**获取秒杀商品
 * @url https://www.ecapi.cn/index/index/openapi/id/54.shtml?ptype=2
 * Class JingdongGetSecKillItems
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $skuIds skuIds集合，长度最大30 示例值：000000,11111 
 * @property String $cid1 一级类目id 示例值：xxxx 
 * @property String $cid2 二级类目id 示例值：xxxx 
 * @property String $cid3 三级类目id 示例值：xxxx 
 * @property String $pageIndex 页码 示例值：1 
 * @property String $pageSize 每页数量，单页数最大30，默认30 示例值：20 
 * @property String $isBeginSecKill 是否返回未开始秒杀商品。1=返回，0=不返回 示例值：- 
 * @property String $secKillPriceFrom 秒杀价区间开始（单位：元） 示例值：19.88 
 * @property String $secKillPriceTo 秒杀价区间结束 示例值：39.9 
 * @property String $owner g=自营，p=pop 示例值：g 
 * @property String $sortName 排序字段，可为空。（默认搜索综合排序。允许的排序字段：seckillPrice、commissionShare、inOrderCount30Days、inOrderComm30Days） 示例值：price 
 * @property String $sort desc=降序，asc=升序，可为空（默认降序) 示例值：desc 
 * @property String $commissionShareFrom 佣金比例区间开始 示例值：4.5 
 * @property String $commissionShareTo 佣金比例区间结束 示例值：90.5 
 */
class JingdongGetSecKillItems extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::JINGDONG_GETSECKILLITEMS, $data);
	}
}