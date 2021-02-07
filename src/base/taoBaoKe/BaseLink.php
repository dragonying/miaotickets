<?php 

namespace zfy\miao\base\taoBaoKe; 

/**喵有券开放平台 
 * Class Interface\BaseLink 
 * @package zfy\miao\taoBaoKe
 */
interface BaseLink
{

	/** ------- 接口路由  -------------   接口路由   --------   接口路由   ---------- 接口路由 --------  */

	/** 淘宝商品分类API */
	const PLATFORM_GETTBCATEGORY ='/platform/getTbCategory';

	/** 获取简版淘客商品信息API */
	const TAOKE_GETITEMINFO ='/taoke/getItemInfo';

	/** 专属店铺物料接口 */
	const TAOKE_GETMATERIALITEM ='/taoke/getMaterialItem';

	/** 权益物料精选 */
	const TAOKE_GETPROMOTIONITEM ='/taoke/getPromotionItem';

	/** 淘抢购/聚划算/9.9元淘客商品库 */
	const PLATFORM_GETITEMLIST ='/platform/getItemList';

	/** 淘宝客店铺查询API */
	const TAOKE_GETTBKSHOP ='/taoke/getTbkShop';

	/** 优惠券信息查询 */
	const TAOKE_GETALICOUPONINFO ='/taoke/getAliCouponInfo';

	/** 抖货商品API */
	const PLATFORM_GETTRILLITEMLIST ='/platform/getTrillItemList';

	/** 首单礼金商品API */
	const PLATFORM_GETFIRSTORDERITEMLIST ='/platform/getFirstOrderItemList';

	/** 全网淘客商品查询API */
	const TAOKE_GETTKMATERIALITEM ='/taoke/getTkMaterialItem';

	/** 高佣转链接API(商品ID) */
	const TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINK ='/taoke/doItemHighCommissionPromotionLink';

	/** 高佣转链接API(淘口令) */
	const TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINKBYTPWD ='/taoke/doItemHighCommissionPromotionLinkByTpwd';

	/** sclick链接解析api */
	const TAOKE_SCLICKTOID ='/taoke/sclicktoid';

	/** 淘宝客店铺转链API */
	const TAOKE_DOSHOPCOVERT ='/taoke/doShopCovert';

	/** 万能转链API接口 */
	const TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINKBYALL ='/taoke/doItemHighCommissionPromotionLinkByAll';

	/** 淘客官方活动(饿了么)推广 */
	const TAOKE_GETTBKACTIVITYINFO ='/taoke/getTbkActivityInfo';

	/** 偷单检测 */
	const TAOKE_CHECKPIDLEGAL ='/taoke/checkPidLegal';

	/** 查询超级红包发放个数 */
	const TAOKE_GETSREDPACKETSENDINFO ='/taoke/getSRedpacketSendInfo';

	/** 淘宝客订单查询API */
	const TAOKE_TBKORDERDETAILSGET ='/taoke/tbkOrderDetailsGet';

	/** 淘客维权退款订单查询API */
	const TAOKE_TBKREFUNDORDERDETAILSGET ='/taoke/tbkRefundOrderDetailsGet';

	/** 处罚订单获取接口 */
	const TAOKE_GETPUNISHORDERLIST ='/taoke/getPunishOrderList';

	/** 淘口令解析&amp;转链 */
	const TAOKE_DOTPWDCOVERT ='/taoke/doTpwdCovert';

	/** 淘口令生成API */
	const TAOKE_CREATETAOPWD ='/taoke/createTaoPwd';

	/** 万能淘口令解析API(付费版) */
	const TAOKE_TPWD_DECRYPT ='/taoke/tpwd_decrypt';

	/** 淘宝客渠道商信息查询API */
	const TAOKE_GETTBKPUBLISHERINFO ='/taoke/getTbkPublisherInfo';

	/** 渠道商一键备案API */
	const INDEX_EXTAPI_TBKRELATIONBEIAN ='/index/extapi/tbkrelationbeian';

	/** (重构)新渠道商一键备案API */
	const TAOKE_GETRELATIONOAUTHTPWD ='/taoke/getRelationOauthTpwd';

	/** 淘宝客邀请码生成API */
	const TAOKE_GETINVITECODE ='/taoke/getInviteCode';

	/** 淘宝客渠道信息备案API */
	const TAOKE_GETTBKQDBEIAN ='/taoke/getTbkQdBeiAn';

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

	/** 生成淘宝短链接API */
	const TAOKE_CREATETAOSHORTURL ='/taoke/createTaoShortUrl';

	/** 发圈(朋友圈)内容API */
	const PLATFORM_GETQUANCONTENT ='/platform/getQuanContent';

	/** 代理IP */
	const PLATFORM_GETPROXYIP ='/platform/getProxyIp';

	/** 淘礼金创建 API */
	const TAOKE_CREATE_TAOLIJIN ='/taoke/create_taolijin';

	/** 淘宝标题分词 API */
	const PLATFORM_TITLEFC ='/platform/titlefc';

	/** IP地址查询API */
	const API_PLATFORM_IPTOREGION ='/api/platform/ipToRegion';



	/** ------- 接口详情  -------------   接口详情   --------   接口详情   ---------- 接口详情 --------  */

	const API_DETAIL = [
 		self::PLATFORM_GETTBCATEGORY => ['title' => '淘宝商品分类API', 'url' => 'http://api.web.ecapi.cn/platform/getTbCategory'],
		self::TAOKE_GETITEMINFO => ['title' => '获取简版淘客商品信息API', 'url' => 'http://api.web.ecapi.cn/taoke/getItemInfo'],
		self::TAOKE_GETMATERIALITEM => ['title' => '专属店铺物料接口', 'url' => 'http://api.web.ecapi.cn/taoke/getMaterialItem'],
		self::TAOKE_GETPROMOTIONITEM => ['title' => '权益物料精选', 'url' => 'http://api.web.ecapi.cn/taoke/getPromotionItem'],
		self::PLATFORM_GETITEMLIST => ['title' => '淘抢购/聚划算/9.9元淘客商品库', 'url' => 'http://api.web.ecapi.cn/platform/getItemList'],
		self::TAOKE_GETTBKSHOP => ['title' => '淘宝客店铺查询API', 'url' => 'http://api.web.ecapi.cn/taoke/getTbkShop'],
		self::TAOKE_GETALICOUPONINFO => ['title' => '优惠券信息查询', 'url' => 'http://api.web.ecapi.cn/taoke/getAliCouponInfo'],
		self::PLATFORM_GETTRILLITEMLIST => ['title' => '抖货商品API', 'url' => 'http://api.web.ecapi.cn/platform/getTrillItemList'],
		self::PLATFORM_GETFIRSTORDERITEMLIST => ['title' => '首单礼金商品API', 'url' => 'http://api.web.ecapi.cn/platform/getFirstOrderItemList'],
		self::TAOKE_GETTKMATERIALITEM => ['title' => '全网淘客商品查询API', 'url' => 'http://api.web.ecapi.cn/taoke/getTkMaterialItem'],
		self::TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINK => ['title' => '高佣转链接API(商品ID)', 'url' => 'http://api.web.ecapi.cn/taoke/doItemHighCommissionPromotionLink'],
		self::TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINKBYTPWD => ['title' => '高佣转链接API(淘口令)', 'url' => 'http://api.web.ecapi.cn/taoke/doItemHighCommissionPromotionLinkByTpwd'],
		self::TAOKE_SCLICKTOID => ['title' => 'sclick链接解析api', 'url' => 'http://api.web.ecapi.cn/taoke/sclicktoid'],
		self::TAOKE_DOSHOPCOVERT => ['title' => '淘宝客店铺转链API', 'url' => 'http://api.web.ecapi.cn/taoke/doShopCovert'],
		self::TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINKBYALL => ['title' => '万能转链API接口', 'url' => 'http://api.web.ecapi.cn/taoke/doItemHighCommissionPromotionLinkByAll'],
		self::TAOKE_GETTBKACTIVITYINFO => ['title' => '淘客官方活动(饿了么)推广', 'url' => 'http://api.web.ecapi.cn/taoke/getTbkActivityInfo'],
		self::TAOKE_CHECKPIDLEGAL => ['title' => '偷单检测', 'url' => 'http://api.web.ecapi.cn/taoke/checkPidLegal'],
		self::TAOKE_GETSREDPACKETSENDINFO => ['title' => '查询超级红包发放个数', 'url' => 'http://api.web.ecapi.cn/taoke/getSRedpacketSendInfo'],
		self::TAOKE_TBKORDERDETAILSGET => ['title' => '淘宝客订单查询API', 'url' => 'http://api.web.ecapi.cn/taoke/tbkOrderDetailsGet'],
		self::TAOKE_TBKREFUNDORDERDETAILSGET => ['title' => '淘客维权退款订单查询API', 'url' => 'http://api.web.ecapi.cn/taoke/tbkRefundOrderDetailsGet'],
		self::TAOKE_GETPUNISHORDERLIST => ['title' => '处罚订单获取接口', 'url' => 'http://api.web.ecapi.cn/taoke/getPunishOrderList'],
		self::TAOKE_DOTPWDCOVERT => ['title' => '淘口令解析&amp;转链', 'url' => 'http://api.web.ecapi.cn/taoke/doTpwdCovert'],
		self::TAOKE_CREATETAOPWD => ['title' => '淘口令生成API', 'url' => 'http://api.web.ecapi.cn/taoke/createTaoPwd'],
		self::TAOKE_TPWD_DECRYPT => ['title' => '万能淘口令解析API(付费版)', 'url' => 'http://api.web.ecapi.cn/taoke/tpwd_decrypt'],
		self::TAOKE_GETTBKPUBLISHERINFO => ['title' => '淘宝客渠道商信息查询API', 'url' => 'http://api.web.ecapi.cn/taoke/getTbkPublisherInfo'],
		self::INDEX_EXTAPI_TBKRELATIONBEIAN => ['title' => '渠道商一键备案API', 'url' => 'https://www.ecapi.cn/index/extapi/tbkrelationbeian'],
		self::TAOKE_GETRELATIONOAUTHTPWD => ['title' => '(重构)新渠道商一键备案API', 'url' => 'http://api.web.ecapi.cn/taoke/getRelationOauthTpwd'],
		self::TAOKE_GETINVITECODE => ['title' => '淘宝客邀请码生成API', 'url' => 'http://api.web.ecapi.cn/taoke/getInviteCode'],
		self::TAOKE_GETTBKQDBEIAN => ['title' => '淘宝客渠道信息备案API', 'url' => 'http://api.web.ecapi.cn/taoke/getTbkQdBeiAn'],
		self::PLATFORM_GETPAYMENTORDERLIST => ['title' => '代付订单查询API', 'url' => 'http://api.web.ecapi.cn/platform/getPaymentOrderList'],
		self::PLATFORM_PAYMENTTOALIPAY => ['title' => '[平台重构版]转帐到支付宝帐户(付款)API', 'url' => 'http://api.web.ecapi.cn/platform/paymentToAlipay'],
		self::PLATFORM_GETPAYMENTBALANCE => ['title' => '支付宝打款余额查询API', 'url' => 'http://api.web.ecapi.cn/platform/getPaymentBalance'],
		self::OP_API_V1_DAIFUKUAN_MERCHANT => ['title' => '[商户版]转帐到支付宝帐户(在线打款)API', 'url' => 'https://api.web.ecapi.cn/op_api_v1/daifukuan_merchant'],
		self::TAOKE_GETTBAUTHLIST => ['title' => '获取授权淘客帐号列表', 'url' => 'http://api.web.ecapi.cn/taoke/getTbAuthList'],
		self::TAOKE_CREATETAOSHORTURL => ['title' => '生成淘宝短链接API', 'url' => 'http://api.web.ecapi.cn/taoke/createTaoShortUrl'],
		self::PLATFORM_GETQUANCONTENT => ['title' => '发圈(朋友圈)内容API', 'url' => 'http://api.web.ecapi.cn/platform/getQuanContent'],
		self::PLATFORM_GETPROXYIP => ['title' => '代理IP', 'url' => 'http://api.web.ecapi.cn/platform/getProxyIp'],
		self::TAOKE_CREATE_TAOLIJIN => ['title' => '淘礼金创建 API', 'url' => 'http://api.web.ecapi.cn/taoke/create_taolijin'],
		self::PLATFORM_TITLEFC => ['title' => '淘宝标题分词 API', 'url' => 'http://api.web.ecapi.cn/platform/titlefc'],
		self::API_PLATFORM_IPTOREGION => ['title' => 'IP地址查询API', 'url' => 'http://api.web.ecapi.cn/api/platform/ipToRegion'],
 
	];
}