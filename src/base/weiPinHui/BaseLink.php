<?php 

namespace zfy\miao\base\weiPinHui; 

/**喵有券开放平台 
 * Class Interface\BaseLink 
 * @package zfy\miao\weiPinHui
 */
interface BaseLink
{

	/** ------- 接口路由  -------------   接口路由   --------   接口路由   ---------- 接口路由 --------  */

	/** 获取指定商品id的商品信息 */
	const VIP_GETGOODSINFO ='/vip/getGoodsInfo';

	/** 获取联盟在推商品列表 */
	const VIP_GETUNIONGOODSLIST ='/vip/getUnionGoodsList';

	/** 根据关键词查询商品列表 */
	const VIP_GETUNIONGOODSQUERY ='/vip/getUnionGoodsQuery';

	/** 根据商品id生成联盟链接 */
	const VIP_GENERALLINKBYID ='/vip/generalLinkById';

	/** 唯品会链接生成联盟链接 */
	const VIP_GENERALLINKBYURL ='/vip/generalLinkByUrl';

	/** 推广链接解析 */
	const VIP_CHANGECPSURLTOITEM ='/vip/changeCpsUrlToItem';

	/** 查询订单列表 */
	const VIP_GETORDERLIST ='/vip/getOrderList';

	/** 获取维权订单列表 */
	const VIP_GETREFOUNDORDERLIST ='/vip/getRefoundOrderList';

	/** 创建推广位 */
	const VIP_CREATEPID ='/vip/createPid';

	/** 查询推广位 */
	const VIP_QUERYPID ='/vip/queryPid';



	/** ------- 接口详情  -------------   接口详情   --------   接口详情   ---------- 接口详情 --------  */

	const API_DETAIL = [
 		self::VIP_GETGOODSINFO => ['title' => '获取指定商品id的商品信息', 'url' => 'http://api.web.ecapi.cn/vip/getGoodsInfo'],
		self::VIP_GETUNIONGOODSLIST => ['title' => '获取联盟在推商品列表', 'url' => 'http://api.web.ecapi.cn/vip/getUnionGoodsList'],
		self::VIP_GETUNIONGOODSQUERY => ['title' => '根据关键词查询商品列表', 'url' => 'http://api.web.ecapi.cn/vip/getUnionGoodsQuery'],
		self::VIP_GENERALLINKBYID => ['title' => '根据商品id生成联盟链接', 'url' => 'http://api.web.ecapi.cn/vip/generalLinkById'],
		self::VIP_GENERALLINKBYURL => ['title' => '唯品会链接生成联盟链接', 'url' => 'http://api.web.ecapi.cn/vip/generalLinkByUrl'],
		self::VIP_CHANGECPSURLTOITEM => ['title' => '推广链接解析', 'url' => 'http://api.web.ecapi.cn/vip/changeCpsUrlToItem'],
		self::VIP_GETORDERLIST => ['title' => '查询订单列表', 'url' => 'http://api.web.ecapi.cn/vip/getOrderList'],
		self::VIP_GETREFOUNDORDERLIST => ['title' => '获取维权订单列表', 'url' => 'http://api.web.ecapi.cn/vip/getRefoundOrderList'],
		self::VIP_CREATEPID => ['title' => '创建推广位', 'url' => 'http://api.web.ecapi.cn/vip/createPid'],
		self::VIP_QUERYPID => ['title' => '查询推广位', 'url' => 'http://api.web.ecapi.cn/vip/queryPid'],
 
	];
}