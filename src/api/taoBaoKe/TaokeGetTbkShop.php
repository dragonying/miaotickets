<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**淘宝客店铺查询API
 * @url https://www.ecapi.cn/index/index/openapi/id/49.shtml?ptype=1
 * Class TaokeGetTbkShop
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $sort 排序_des（降序），排序_asc（升序），佣金比率（commission_rate），商品数量（auction_count），销售总数量（total_auction） 示例值：commission_rate_des 
 * @property String $istmall 是否商城的店铺，设置为true表示该是属于淘宝商城的店铺，设置为false或不设置表示不判断这个属性 示例值：false 
 * @property Number $startcredit 信用等级下限，1~20 示例值：1 
 * @property Number $endcredit 信用等级上限，1~20 示例值：20 
 * @property Number $startcommission 淘客佣金比率下限，1~10000 示例值：2000 
 * @property Number $endcommission 淘客佣金比率上限，1~10000 示例值：123 
 * @property String $keyword 查询词或店铺名 示例值：旗舰店 
 * @property Number $starttotal 店铺商品总数下限 示例值：1 
 * @property Number $endtotal 店铺商品总数上限 示例值：100 
 * @property Number $startauction 累计推广商品下限 示例值：123 
 * @property Number $endauction 累计推广商品上限 示例值：200 
 * @property Number $platform 链接形式：1：PC，2：无线，默认：１ 示例值：1 
 * @property Number $pageno 第几页，默认1，1~100 示例值：1 
 * @property Number $pagesize 页大小，默认20，1~100 示例值：20 
 */
class TaokeGetTbkShop extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'keyword'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETTBKSHOP, $data);
	}
}