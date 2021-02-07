<?php 

namespace zfy\miao\base\pingDuoDuo; 

/**喵有券开放平台 
 * Class Interface\BaseLink 
 * @package zfy\miao\pingDuoDuo
 */
interface BaseLink
{

	/** ------- 接口路由  -------------   接口路由   --------   接口路由   ---------- 接口路由 --------  */

	/** 查询主题商品列表 */
	const PINDUODUO_GETTHEMEGOODSLIST ='/pinduoduo/getThemeGoodsList';

	/** 多多进宝商品推荐API */
	const PINDUODUO_GETRECOMMENDGOODSLIST ='/pinduoduo/getRecommendGoodsList';

	/** 查询店铺商品 */
	const PINDUODUO_GETPDDMALLGOODS ='/pinduoduo/getPddMallGoods';

	/** 多多客查店铺列表接口 */
	const PINDUODUO_GETSHOPLIST ='/pinduoduo/getShopList';

	/** 查询主题列表 */
	const PINDUODUO_GETTHEMELIST ='/pinduoduo/getThemeList';

	/** 获取商品详细信息 */
	const PINDUODUO_GETGOODSDETAILINFO ='/pinduoduo/getGoodsDetailInfo';

	/** 获取爆款排行商品 */
	const PINDUODUO_GETTOPGOODSLIST ='/pinduoduo/getTopGoodsList';

	/** 获取商品基础信息 */
	const PINDUODUO_GETGOODSBASICINFO ='/pinduoduo/getGoodsBasicInfo';

	/** 查询拼多多推广商品API */
	const PINDUODUO_GETPDDITEM ='/pinduoduo/getpdditem';

	/** 获取拼多多opt商品标签列表 */
	const PINDUODUO_GETPDDOPTS ='/pinduoduo/getPddOpts';

	/** [新]查询拼多多推广商品API */
	const PINDUODUO_GOODSSEARCH ='/pinduoduo/goodsSearch';

	/** 生成营销工具推广链接 */
	const PINDUODUO_GETRPPROMURL ='/pinduoduo/getRpPromUrl';

	/** 拼多多主站频道推广接口 */
	const PINDUODUO_GENERALRESOURCEURL ='/pinduoduo/generalResourceUrl';

	/** 多多进宝主题推广链接生成接口 */
	const PINDUODUO_GENERALTHEMEPROMURL ='/pinduoduo/generalThemePromUrl';

	/** 批量绑定推广位的媒体id */
	const PINDUODUO_PIDMEDIAIDBIND ='/pinduoduo/pidMediaIdBind';

	/** 创建商城推广链接 */
	const PINDUODUO_CREATEMALLPROMOTIONURL ='/pinduoduo/createMallPromotionUrl';

	/** 获取拼多多商品推广链接API */
	const PINDUODUO_CREATEITEMPROMOTIONURL ='/pinduoduo/createItemPromotionUrl';

	/** 生成招商推广链接[招商推广链接转换] */
	const PINDUODUO_CHANGEPROMOTIONLINKTOSELF ='/pinduoduo/changePromotionLinkToSelf';

	/** 生成单品推广小程序二维码 */
	const PINDUODUO_CREATESMARTAPPPROMOTIONQRCODE ='/pinduoduo/createSmartAppPromotionQrcode';

	/** 按更新时间段增量获取推广订单 */
	const PINDUODUO_GETOAUTHINCREMENTORDERLIST ='/pinduoduo/getOauthIncrementOrderList';

	/** 拼多多订单详情API */
	const PINDUODUO_GETORDERDETAIL ='/pinduoduo/getOrderDetail';

	/** 创建推广位接口 */
	const PINDUODUO_CREATEPID ='/pinduoduo/createPid';

	/** 查询所有推广位API */
	const PINDUODUO_GETPIDLIST ='/pinduoduo/getPidList';

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

	/** 查询是否绑定备案 */
	const PINDUODUO_GETOAUTHMEMBERAUTHORITY ='/pinduoduo/getOauthMemberAuthority';

	/** 发圈(朋友圈)内容API */
	const PLATFORM_GETQUANCONTENT ='/platform/getQuanContent';

	/** 代理IP */
	const PLATFORM_GETPROXYIP ='/platform/getProxyIp';

	/** IP地址查询API */
	const API_PLATFORM_IPTOREGION ='/api/platform/ipToRegion';



	/** ------- 接口详情  -------------   接口详情   --------   接口详情   ---------- 接口详情 --------  */

	const API_DETAIL = [
 		self::PINDUODUO_GETTHEMEGOODSLIST => ['title' => '查询主题商品列表', 'url' => 'http://api.web.ecapi.cn/pinduoduo/getThemeGoodsList'],
		self::PINDUODUO_GETRECOMMENDGOODSLIST => ['title' => '多多进宝商品推荐API', 'url' => 'http://api.web.ecapi.cn/pinduoduo/getRecommendGoodsList'],
		self::PINDUODUO_GETPDDMALLGOODS => ['title' => '查询店铺商品', 'url' => 'http://api.web.ecapi.cn/pinduoduo/getPddMallGoods'],
		self::PINDUODUO_GETSHOPLIST => ['title' => '多多客查店铺列表接口', 'url' => 'http://api.web.ecapi.cn/pinduoduo/getShopList'],
		self::PINDUODUO_GETTHEMELIST => ['title' => '查询主题列表', 'url' => 'http://api.web.ecapi.cn/pinduoduo/getThemeList'],
		self::PINDUODUO_GETGOODSDETAILINFO => ['title' => '获取商品详细信息', 'url' => 'http://api.web.ecapi.cn/pinduoduo/getGoodsDetailInfo'],
		self::PINDUODUO_GETTOPGOODSLIST => ['title' => '获取爆款排行商品', 'url' => 'http://api.web.ecapi.cn/pinduoduo/getTopGoodsList'],
		self::PINDUODUO_GETGOODSBASICINFO => ['title' => '获取商品基础信息', 'url' => 'http://api.web.ecapi.cn/pinduoduo/getGoodsBasicInfo'],
		self::PINDUODUO_GETPDDITEM => ['title' => '查询拼多多推广商品API', 'url' => 'http://api.web.ecapi.cn/pinduoduo/getpdditem'],
		self::PINDUODUO_GETPDDOPTS => ['title' => '获取拼多多opt商品标签列表', 'url' => 'http://api.web.ecapi.cn/pinduoduo/getPddOpts'],
		self::PINDUODUO_GOODSSEARCH => ['title' => '[新]查询拼多多推广商品API', 'url' => 'http://api.web.ecapi.cn/pinduoduo/goodsSearch'],
		self::PINDUODUO_GETRPPROMURL => ['title' => '生成营销工具推广链接', 'url' => 'http://api.web.ecapi.cn/pinduoduo/getRpPromUrl'],
		self::PINDUODUO_GENERALRESOURCEURL => ['title' => '拼多多主站频道推广接口', 'url' => 'http://api.web.ecapi.cn/pinduoduo/generalResourceUrl'],
		self::PINDUODUO_GENERALTHEMEPROMURL => ['title' => '多多进宝主题推广链接生成接口', 'url' => 'http://api.web.ecapi.cn/pinduoduo/generalThemePromUrl'],
		self::PINDUODUO_PIDMEDIAIDBIND => ['title' => '批量绑定推广位的媒体id', 'url' => 'http://api.web.ecapi.cn/pinduoduo/pidMediaIdBind'],
		self::PINDUODUO_CREATEMALLPROMOTIONURL => ['title' => '创建商城推广链接', 'url' => 'http://api.web.ecapi.cn/pinduoduo/createMallPromotionUrl'],
		self::PINDUODUO_CREATEITEMPROMOTIONURL => ['title' => '获取拼多多商品推广链接API', 'url' => 'http://api.web.ecapi.cn/pinduoduo/createItemPromotionUrl'],
		self::PINDUODUO_CHANGEPROMOTIONLINKTOSELF => ['title' => '生成招商推广链接[招商推广链接转换]', 'url' => 'http://api.web.ecapi.cn/pinduoduo/changePromotionLinkToSelf'],
		self::PINDUODUO_CREATESMARTAPPPROMOTIONQRCODE => ['title' => '生成单品推广小程序二维码', 'url' => 'http://api.web.ecapi.cn/pinduoduo/createSmartAppPromotionQrcode'],
		self::PINDUODUO_GETOAUTHINCREMENTORDERLIST => ['title' => '按更新时间段增量获取推广订单', 'url' => 'http://api.web.ecapi.cn/pinduoduo/getOauthIncrementOrderList'],
		self::PINDUODUO_GETORDERDETAIL => ['title' => '拼多多订单详情API', 'url' => 'http://api.web.ecapi.cn/pinduoduo/getOrderDetail'],
		self::PINDUODUO_CREATEPID => ['title' => '创建推广位接口', 'url' => 'http://api.web.ecapi.cn/pinduoduo/createPid'],
		self::PINDUODUO_GETPIDLIST => ['title' => '查询所有推广位API', 'url' => 'http://api.web.ecapi.cn/pinduoduo/getPidList'],
		self::PLATFORM_GETPAYMENTORDERLIST => ['title' => '代付订单查询API', 'url' => 'http://api.web.ecapi.cn/platform/getPaymentOrderList'],
		self::PLATFORM_PAYMENTTOALIPAY => ['title' => '[平台重构版]转帐到支付宝帐户(付款)API', 'url' => 'http://api.web.ecapi.cn/platform/paymentToAlipay'],
		self::PLATFORM_GETPAYMENTBALANCE => ['title' => '支付宝打款余额查询API', 'url' => 'http://api.web.ecapi.cn/platform/getPaymentBalance'],
		self::OP_API_V1_DAIFUKUAN_MERCHANT => ['title' => '[商户版]转帐到支付宝帐户(在线打款)API', 'url' => 'https://api.web.ecapi.cn/op_api_v1/daifukuan_merchant'],
		self::TAOKE_GETTBAUTHLIST => ['title' => '获取授权淘客帐号列表', 'url' => 'http://api.web.ecapi.cn/taoke/getTbAuthList'],
		self::PINDUODUO_GETOAUTHMEMBERAUTHORITY => ['title' => '查询是否绑定备案', 'url' => 'http://api.web.ecapi.cn/pinduoduo/getOauthMemberAuthority'],
		self::PLATFORM_GETQUANCONTENT => ['title' => '发圈(朋友圈)内容API', 'url' => 'http://api.web.ecapi.cn/platform/getQuanContent'],
		self::PLATFORM_GETPROXYIP => ['title' => '代理IP', 'url' => 'http://api.web.ecapi.cn/platform/getProxyIp'],
		self::API_PLATFORM_IPTOREGION => ['title' => 'IP地址查询API', 'url' => 'http://api.web.ecapi.cn/api/platform/ipToRegion'],
 
	];
}