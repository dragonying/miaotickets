<?php 

namespace zfy\miao\base\jinDong; 

/**喵有券开放平台 
 * Class Interface\BaseLink 
 * @package zfy\miao\jinDong
 */
interface BaseLink
{

	/** ------- 接口路由  -------------   接口路由   --------   接口路由   ---------- 接口路由 --------  */

	/** 获取推广商品信息接口 */
	const JINGDONG_GETPROMOTIONITEMINFO ='/jingdong/getPromotionItemInfo';

	/** 商品类目查询 */
	const JINGDONG_GETITEMCATEINFO ='/jingdong/getItemCateInfo';

	/** 京东商品查询API */
	const JINGDONG_GETJDUNIONITEMS ='/jingdong/getJdUnionItems';

	/** 优惠券信息查询 */
	const JINGDONG_GETCOUPONINFO ='/jingdong/getCouponInfo';

	/** 获取秒杀商品 */
	const JINGDONG_GETSECKILLITEMS ='/jingdong/getSecKillItems';

	/** 京东商品详情页API */
	const JINGDONG_GETITEMDESC ='/jingdong/getItemDesc';

	/** 京粉精选商品查询接口 */
	const JINGDONG_GETJFITEMS ='/jingdong/getJfItems';

	/** 获取商品综合信息 */
	const JINGDONG_GETITEMINFO ='/jingdong/getItemInfo';

	/** 猜你喜欢商品推荐 */
	const JINGDONG_GETJDGOODSMATERIAL ='/jingdong/getJdGoodsMaterial';

	/** 获取商品推广链接(支持subUnionId) */
	const JINGDONG_DOITEMCPSURL ='/jingdong/doItemCpsUrl';

	/** 京东通用转链API */
	const JINGDONG_DOPROMOTIONCOMMONURL ='/jingdong/doPromotionCommonUrl';

	/** 商品转链(支持subUnionId及文案) */
	const JINGDONG_DOITEMCPSURLWITHCONTENT ='/jingdong/doItemCpsUrlWithContent';

	/** 京东联盟订单查询接口 */
	const JINGDONG_GETJDUNIONORDERS ='/jingdong/getJdUnionOrders';

	/** 创建推广位 */
	const JINGDONG_CREATEUNIONPOSITION ='/jingdong/createUnionPosition';

	/** 查询推广位 */
	const JINGDONG_GETUNIONPOSITION ='/jingdong/getUnionPosition';

	/** 代付订单查询API */
	const PLATFORM_GETPAYMENTORDERLIST ='/platform/getPaymentOrderList';

	/** [平台重构版]转帐到支付宝帐户(付款)API */
	const PLATFORM_PAYMENTTOALIPAY ='/platform/paymentToAlipay';

	/** 支付宝打款余额查询API */
	const PLATFORM_GETPAYMENTBALANCE ='/platform/getPaymentBalance';

	/** [商户版]转帐到支付宝帐户(在线打款)API */
	const OP_API_V1_DAIFUKUAN_MERCHANT ='/op_api_v1/daifukuan_merchant';

	/** 获取授权淘客帐号列表 */
	const TAOKE_GETTBAUTHLIST ='/taoke/getTbAuthList';

	/** 发圈(朋友圈)内容API */
	const PLATFORM_GETQUANCONTENT ='/platform/getQuanContent';

	/** 代理IP */
	const PLATFORM_GETPROXYIP ='/platform/getProxyIp';

	/** IP地址查询API */
	const API_PLATFORM_IPTOREGION ='/api/platform/ipToRegion';

	/** 活动查询接口 */
	const JINGDONG_GETACTIVITYLIST ='/jingdong/getActivityList';



	/** ------- 接口详情  -------------   接口详情   --------   接口详情   ---------- 接口详情 --------  */

	const API_DETAIL = [
 		self::JINGDONG_GETPROMOTIONITEMINFO => ['title' => '获取推广商品信息接口', 'url' => 'http://api.web.ecapi.cn/jingdong/getPromotionItemInfo'],
		self::JINGDONG_GETITEMCATEINFO => ['title' => '商品类目查询', 'url' => 'http://api.web.ecapi.cn/jingdong/getItemCateInfo'],
		self::JINGDONG_GETJDUNIONITEMS => ['title' => '京东商品查询API', 'url' => 'http://api.web.ecapi.cn/jingdong/getJdUnionItems'],
		self::JINGDONG_GETCOUPONINFO => ['title' => '优惠券信息查询', 'url' => 'http://api.web.ecapi.cn/jingdong/getCouponInfo'],
		self::JINGDONG_GETSECKILLITEMS => ['title' => '获取秒杀商品', 'url' => 'http://api.web.ecapi.cn/jingdong/getSecKillItems'],
		self::JINGDONG_GETITEMDESC => ['title' => '京东商品详情页API', 'url' => 'http://api.web.ecapi.cn/jingdong/getItemDesc'],
		self::JINGDONG_GETJFITEMS => ['title' => '京粉精选商品查询接口', 'url' => 'http://api.web.ecapi.cn/jingdong/getJfItems'],
		self::JINGDONG_GETITEMINFO => ['title' => '获取商品综合信息', 'url' => 'http://api.web.ecapi.cn/jingdong/getItemInfo'],
		self::JINGDONG_GETJDGOODSMATERIAL => ['title' => '猜你喜欢商品推荐', 'url' => 'http://api.web.ecapi.cn/jingdong/getJdGoodsMaterial'],
		self::JINGDONG_DOITEMCPSURL => ['title' => '获取商品推广链接(支持subUnionId)', 'url' => 'http://api.web.ecapi.cn/jingdong/doItemCpsUrl'],
		self::JINGDONG_DOPROMOTIONCOMMONURL => ['title' => '京东通用转链API', 'url' => 'http://api.web.ecapi.cn/jingdong/doPromotionCommonUrl'],
		self::JINGDONG_DOITEMCPSURLWITHCONTENT => ['title' => '商品转链(支持subUnionId及文案)', 'url' => 'http://api.web.ecapi.cn/jingdong/doItemCpsUrlWithContent'],
		self::JINGDONG_GETJDUNIONORDERS => ['title' => '京东联盟订单查询接口', 'url' => 'http://api.web.ecapi.cn/jingdong/getJdUnionOrders'],
		self::JINGDONG_CREATEUNIONPOSITION => ['title' => '创建推广位', 'url' => 'http://api.web.ecapi.cn/jingdong/createUnionPosition'],
		self::JINGDONG_GETUNIONPOSITION => ['title' => '查询推广位', 'url' => 'http://api.web.ecapi.cn/jingdong/getUnionPosition'],
		self::PLATFORM_GETPAYMENTORDERLIST => ['title' => '代付订单查询API', 'url' => 'http://api.web.ecapi.cn/platform/getPaymentOrderList'],
		self::PLATFORM_PAYMENTTOALIPAY => ['title' => '[平台重构版]转帐到支付宝帐户(付款)API', 'url' => 'http://api.web.ecapi.cn/platform/paymentToAlipay'],
		self::PLATFORM_GETPAYMENTBALANCE => ['title' => '支付宝打款余额查询API', 'url' => 'http://api.web.ecapi.cn/platform/getPaymentBalance'],
		self::OP_API_V1_DAIFUKUAN_MERCHANT => ['title' => '[商户版]转帐到支付宝帐户(在线打款)API', 'url' => 'https://api.web.ecapi.cn/op_api_v1/daifukuan_merchant'],
		self::TAOKE_GETTBAUTHLIST => ['title' => '获取授权淘客帐号列表', 'url' => 'http://api.web.ecapi.cn/taoke/getTbAuthList'],
		self::PLATFORM_GETQUANCONTENT => ['title' => '发圈(朋友圈)内容API', 'url' => 'http://api.web.ecapi.cn/platform/getQuanContent'],
		self::PLATFORM_GETPROXYIP => ['title' => '代理IP', 'url' => 'http://api.web.ecapi.cn/platform/getProxyIp'],
		self::API_PLATFORM_IPTOREGION => ['title' => 'IP地址查询API', 'url' => 'http://api.web.ecapi.cn/api/platform/ipToRegion'],
		self::JINGDONG_GETACTIVITYLIST => ['title' => '活动查询接口', 'url' => 'http://api.web.ecapi.cn/jingdong/getActivityList'],
 
	];
}