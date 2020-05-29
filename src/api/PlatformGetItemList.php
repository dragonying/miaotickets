<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)淘抢购/聚划算/9.9元淘客商品库 API
 * @url https://open.21ds.cn/index/index/openapi/id/50.shtml?ptype=1
 * Class PlatformGetItemList
 * @package zfy\miao\api
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String $page 当前页数
 * @property String $pagesize 每页数量，默认为20，最大支持每页100条数据
 * @property String $keyword 商品搜索词，与分类ID选择一项即可
 * @property String $cat 商品分类ID，具体参见：https://www.kancloud.cn/dragon9/myquan-openapi/1074796
 * @property String $field 排序字段，quanhoujia:券后价，youhuiquan:优惠券金额
 * @property String $sort 排序方式，desc，倒序，asc，正序
 * @property String $startprice 最低券后价，保留两位小数
 * @property String $endprice 最高券后价，保留两位小数
 * @property String $itemid 商品ID
 * @property String $itemtype 商品类型，item为普通淘客商品，ju为聚划算商品，tqg为淘抢购商品
 * @property String $start_time 活动开始时间（仅聚划算、淘抢购有效）
 * @property String $end_time 活动结束时间（仅聚划算、淘抢购有效）
 * @property Number $has_count 是否返回商品数量
 */
class PlatformGetItemList extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'page'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_GETITEMLIST, $data);
	}
}