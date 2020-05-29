<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)淘宝客店铺查询API
 * Class TaokeGetTbkShop
 * @url https://open.21ds.cn/index/index/openapi/id/49.shtml?ptype=1
 * @package zfy\miao\api
 * @property String apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String sort 排序_des（降序），排序_asc（升序），佣金比率（commission_rate），商品数量（auction_count），销售总数量（total_auction）
 * @property String istmall 是否商城的店铺，设置为true表示该是属于淘宝商城的店铺，设置为false或不设置表示不判断这个属性
 * @property Number startcredit 信用等级下限，1~20
 * @property Number endcredit 信用等级上限，1~20
 * @property Number startcommission 淘客佣金比率下限，1~10000
 * @property Number endcommission 淘客佣金比率上限，1~10000
 * @property String keyword 查询词或店铺名
 * @property Number starttotal 店铺商品总数下限
 * @property Number endtotal 店铺商品总数上限
 * @property Number startauction 累计推广商品下限
 * @property Number endauction 累计推广商品上限
 * @property Number platform 链接形式：1：PC，2：无线，默认：１
 * @property Number pageno 第几页，默认1，1~100
 * @property Number pagesize 页大小，默认20，1~100
 */
class TaokeGetTbkShop extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'keyword'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETTBKSHOP, $data);
	}
}