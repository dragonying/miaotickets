<?php 

namespace zfy\miao\base\kaoLaHaiGou; 

/**喵有券开放平台 
 * Class Interface\BaseLink 
 * @package zfy\miao\kaoLaHaiGou
 */
interface BaseLink
{

	/** ------- 接口路由  -------------   接口路由   --------   接口路由   ---------- 接口路由 --------  */

	/** 获取推荐商品列表 */
	const KAOLA_GETRECOMMENDGOODSLIST ='/kaola/getRecommendGoodsList';

	/** 获取精选商品列表 */
	const KAOLA_GETSELECTEDGOODSLIST ='/kaola/getSelectedGoodsList';

	/** 根据商品ID查询商品信息 */
	const KAOLA_GETGOODSINFO ='/kaola/getGoodsInfo';

	/** 商品搜索接口 */
	const KAOLA_SEARCHGOODS ='/kaola/searchGoods';

	/** 批量转链接口 */
	const KAOLA_DOSHARELINK ='/kaola/doShareLink';

	/** 考拉订单 */
	const KAOLA_ORDER ='/kaola/order';



	/** ------- 接口详情  -------------   接口详情   --------   接口详情   ---------- 接口详情 --------  */

	const API_DETAIL = [
 		self::KAOLA_GETRECOMMENDGOODSLIST => ['title' => '获取推荐商品列表', 'url' => 'http://api.web.ecapi.cn/kaola/getRecommendGoodsList'],
		self::KAOLA_GETSELECTEDGOODSLIST => ['title' => '获取精选商品列表', 'url' => 'http://api.web.ecapi.cn/kaola/getSelectedGoodsList'],
		self::KAOLA_GETGOODSINFO => ['title' => '根据商品ID查询商品信息', 'url' => 'http://api.web.ecapi.cn/kaola/getGoodsInfo'],
		self::KAOLA_SEARCHGOODS => ['title' => '商品搜索接口', 'url' => 'http://api.web.ecapi.cn/kaola/searchGoods'],
		self::KAOLA_DOSHARELINK => ['title' => '批量转链接口', 'url' => 'http://api.web.ecapi.cn/kaola/doShareLink'],
		self::KAOLA_ORDER => ['title' => '考拉订单', 'url' => 'http://api.web.ecapi.cn/kaola/order'],
 
	];
}