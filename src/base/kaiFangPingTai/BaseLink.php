<?php 

namespace zfy\miao\base\kaiFangPingTai; 

/**喵有券开放平台 
 * Class Interface\BaseLink 
 * @package zfy\miao\kaiFangPingTai
 */
interface BaseLink
{

	/** ------- 接口路由  -------------   接口路由   --------   接口路由   ---------- 接口路由 --------  */

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



	/** ------- 接口详情  -------------   接口详情   --------   接口详情   ---------- 接口详情 --------  */

	const API_DETAIL = [
 		self::PLATFORM_GETPAYMENTORDERLIST => ['title' => '代付订单查询API', 'url' => 'http://api.web.ecapi.cn/platform/getPaymentOrderList'],
		self::PLATFORM_PAYMENTTOALIPAY => ['title' => '[平台重构版]转帐到支付宝帐户(付款)API', 'url' => 'http://api.web.ecapi.cn/platform/paymentToAlipay'],
		self::PLATFORM_GETPAYMENTBALANCE => ['title' => '支付宝打款余额查询API', 'url' => 'http://api.web.ecapi.cn/platform/getPaymentBalance'],
		self::OP_API_V1_DAIFUKUAN_MERCHANT => ['title' => '[商户版]转帐到支付宝帐户(在线打款)API', 'url' => 'https://api.web.ecapi.cn/op_api_v1/daifukuan_merchant'],
		self::TAOKE_GETTBAUTHLIST => ['title' => '获取授权淘客帐号列表', 'url' => 'http://api.web.ecapi.cn/taoke/getTbAuthList'],
		self::PLATFORM_GETQUANCONTENT => ['title' => '发圈(朋友圈)内容API', 'url' => 'http://api.web.ecapi.cn/platform/getQuanContent'],
		self::PLATFORM_GETPROXYIP => ['title' => '代理IP', 'url' => 'http://api.web.ecapi.cn/platform/getProxyIp'],
		self::API_PLATFORM_IPTOREGION => ['title' => 'IP地址查询API', 'url' => 'http://api.web.ecapi.cn/api/platform/ipToRegion'],
 
	];
}