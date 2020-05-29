<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-05-24
 * Time: 16:07
 */

namespace zfy\miao\base;

/**喵有券开放平台：https://open.21ds.cn/index/index/openapi/id/1.shtml?ptype=1
 * Interface baseLink
 * @package zfy\miao
 */
interface BaseLink
{

    const USER_AP_KEY_NAME = 'apkey';
    const USER_PID_KEY     = 'pid';
    const USER_TB_NAME_KEY = 'tbname';


    const BASE_URL = 'http://api.web.21ds.cn';


    /** (重构版)淘宝商品分类API */
    const PLATFORM_GETTBCATEGORY = '/platform/getTbCategory';
    /** (重构版)获取简版淘客商品信息API */
    const TAOKE_GETITEMINFO = '/taoke/getItemInfo';
    /** (重构版)物料精选[猜你喜欢] */
    const TAOKE_GETMATERIALITEM = '/taoke/getMaterialItem';
    /** (重构版)专属店铺物料接口 */
    //    const TAOKE_GETMATERIALITEM = '/taoke/getMaterialItem';
    /** (重构版)全网淘客商品查询API */
    const TAOKE_GETTKMATERIALITEM = '/taoke/getTkMaterialItem';
    /** (重构版)淘宝客店铺查询API */
    const TAOKE_GETTBKSHOP = '/taoke/getTbkShop';
    /** (重构版)淘抢购/聚划算/9.9元淘客商品库 API */
    const PLATFORM_GETITEMLIST = '/platform/getItemList';
    /** (重构版)高佣转链接API(商品ID) */
    const TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINK = '/taoke/doItemHighCommissionPromotionLink';
    /** (重构版)高佣转链接API(淘口令) */
    const TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINKBYTPWD = '/taoke/doItemHighCommissionPromotionLinkByTpwd';
    /** (重构版)sclick链接解析api */
    const TAOKE_SCLICKTOID = '/taoke/sclicktoid';
    /** (重构版)淘宝客店铺转链API */
    const TAOKE_DOSHOPCOVERT = '/taoke/doShopCovert';
    /** (重构版)淘宝联盟官方活动推广API */
    const TAOKE_GETTBKACTIVITYLINK = '/taoke/getTbkActivityLink';
    /** (重构版)万能高佣转链API接口 */
    const TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINKBYALL = '/taoke/doItemHighCommissionPromotionLinkByAll';
    /** (重构版)淘客官方活动推广(更新版) */
    const TAOKE_GETTBKACTIVITYINFO = '/taoke/getTbkActivityInfo';
    /** (重构版)淘宝客订单查询API */
    const TAOKE_TBKORDERDETAILSGET = '/taoke/tbkOrderDetailsGet';
    /** (重构版)淘宝客维权退款订单查询API */
    const TAOKE_TBKREFUNDORDERDETAILSGET = '/taoke/tbkRefundOrderDetailsGet';
    /** (重构版)处罚订单获取接口 */
    const TAOKE_GETPUNISHORDERLIST = '/taoke/getPunishOrderList';
    /** (重构版)淘口令解析商品ID API */
    const TAOKE_TPWDTOID = '/taoke/tpwdToId';
    /** (重构版)淘口令解析&amp;转链 */
    const TAOKE_DOTPWDCOVERT = '/taoke/doTpwdCovert';
    /** (重构版)淘口令解析API */
    const TAOKE_JIEXITKL = '/taoke/jiexitkl';
    /** (重构版)淘口令生成API */
    const TAOKE_CREATETAOPWD = '/taoke/createTaoPwd';
    /** (重构版)淘口令解析API(付费版) */
    const TAOKE_TPWD_DECRYPT = '/taoke/tpwd_decrypt';
    /** (重构版)淘宝客渠道商信息查询API */
    const TAOKE_GETTBKPUBLISHERINFO = '/taoke/getTbkPublisherInfo';
    /** 渠道商一键备案API */
    const INDEX_EXTAPI_TBKRELATIONBEIAN = '/index/extapi/tbkrelationbeian';
    /** (重构)新渠道商一键备案API */
    const TAOKE_GETRELATIONOAUTHTPWD = '/taoke/getRelationOauthTpwd';
    /** (重构版)淘宝客邀请码生成API */
    const TAOKE_GETINVITECODE = '/taoke/getInviteCode';
    /** (重构版)淘宝客渠道信息备案API */
    const TAOKE_GETTBKQDBEIAN = '/taoke/getTbkQdBeiAn';
    /** 代付订单查询API */
    const PLATFORM_GETPAYMENTORDERLIST = '/platform/getPaymentOrderList';
    /** [平台重构版]转帐到支付宝帐户(付款)API */
    const PLATFORM_PAYMENTTOALIPAY = '/platform/paymentToAlipay';
    /** (重构版)支付宝打款余额查询API */
    const PLATFORM_GETPAYMENTBALANCE = '/platform/getPaymentBalance';
    /** [商户版]转帐到支付宝帐户(在线打款)API */
    const OP_API_V1_DAIFUKUAN_MERCHANT = '/op_api_v1/daifukuan_merchant';
    /** (重构版)获取授权淘客帐号列表 */
    const TAOKE_GETTBAUTHLIST = '/taoke/getTbAuthList';
    /** (重构版)生成淘宝短链接API */
    const TAOKE_CREATETAOSHORTURL = '/taoke/createTaoShortUrl';
    /** (重构版)发圈(朋友圈)内容API */
    const PLATFORM_GETQUANCONTENT = '/platform/getQuanContent';
    /** 代理IP */
    const OP_API_V1_GETPROXYIP = '/op_api_v1/getProxyIp';
    /** (重构版)淘礼金创建 API */
    const TAOKE_CREATE_TAOLIJIN = '/taoke/create_taolijin';
    /** 淘宝标题分词 API */
    const OP_API_V1_TITLEFC = '/op_api_v1/titlefc';
    /** IP地址查询API */
    const API_PLATFORM_IPTOLOCATION = '/api/platform/ipToLocation';
    /** 微信封禁域名检测 API */
    const OP_API_V1_WEIXINURLCHECK = '/op_api_v1/weixinurlcheck';
    /** 快递查询 */
    const PLATFORM_EXPRESSQUERY = '/platform/expressQuery';

    /** ------- detail    -------------    detail    --------   detail    ------------------  */
    const API_DETAIL = [
        self::PLATFORM_GETTBCATEGORY => ['title' => '(重构版)淘宝商品分类API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/124.shtml?ptype=1'],
        self::TAOKE_GETITEMINFO => ['title' => '(重构版)获取简版淘客商品信息API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/11.shtml?ptype=1'],
        self::TAOKE_GETMATERIALITEM => ['title' => '(重构版)物料精选[猜你喜欢]', 'url' => 'https://open.21ds.cn/index/index/openapi/id/97.shtml?ptype=1'],
        //        self::TAOKE_GETMATERIALITEM => ['title' => '(重构版)专属店铺物料接口', 'url' => 'https://open.21ds.cn/index/index/openapi/id/159.shtml?ptype=1'],
        self::TAOKE_GETTKMATERIALITEM => ['title' => '(重构版)全网淘客商品查询API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/9.shtml?ptype=1'],
        self::TAOKE_GETTBKSHOP => ['title' => '(重构版)淘宝客店铺查询API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/49.shtml?ptype=1'],
        self::PLATFORM_GETITEMLIST => ['title' => '(重构版)淘抢购/聚划算/9.9元淘客商品库 API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/50.shtml?ptype=1'],
        self::TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINK => ['title' => '(重构版)高佣转链接API(商品ID)', 'url' => 'https://open.21ds.cn/index/index/openapi/id/1.shtml?ptype=1'],
        self::TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINKBYTPWD => ['title' => '(重构版)高佣转链接API(淘口令)', 'url' => 'https://open.21ds.cn/index/index/openapi/id/6.shtml?ptype=1'],
        self::TAOKE_SCLICKTOID => ['title' => '(重构版)sclick链接解析api', 'url' => 'https://open.21ds.cn/index/index/openapi/id/45.shtml?ptype=1'],
        self::TAOKE_DOSHOPCOVERT => ['title' => '(重构版)淘宝客店铺转链API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/86.shtml?ptype=1'],
        self::TAOKE_GETTBKACTIVITYLINK => ['title' => '(重构版)淘宝联盟官方活动推广API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/69.shtml?ptype=1'],
        self::TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINKBYALL => ['title' => '(重构版)万能高佣转链API接口', 'url' => 'https://open.21ds.cn/index/index/openapi/id/72.shtml?ptype=1'],
        self::TAOKE_GETTBKACTIVITYINFO => ['title' => '(重构版)淘客官方活动推广(更新版)', 'url' => 'https://open.21ds.cn/index/index/openapi/id/193.shtml?ptype=1'],
        self::TAOKE_TBKORDERDETAILSGET => ['title' => '(重构版)淘宝客订单查询API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/83.shtml?ptype=1'],
        self::TAOKE_TBKREFUNDORDERDETAILSGET => ['title' => '(重构版)淘宝客维权退款订单查询API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/206.shtml?ptype=1'],
        self::TAOKE_GETPUNISHORDERLIST => ['title' => '(重构版)处罚订单获取接口', 'url' => 'https://open.21ds.cn/index/index/openapi/id/30.shtml?ptype=1'],
        self::TAOKE_TPWDTOID => ['title' => '(重构版)淘口令解析商品ID API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/5.shtml?ptype=1'],
        self::TAOKE_DOTPWDCOVERT => ['title' => '(重构版)淘口令解析&amp;转链', 'url' => 'https://open.21ds.cn/index/index/openapi/id/87.shtml?ptype=1'],
        self::TAOKE_JIEXITKL => ['title' => '(重构版)淘口令解析API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/2.shtml?ptype=1'],
        self::TAOKE_CREATETAOPWD => ['title' => '(重构版)淘口令生成API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/3.shtml?ptype=1'],
        self::TAOKE_TPWD_DECRYPT => ['title' => '(重构版)淘口令解析API(付费版)', 'url' => 'https://open.21ds.cn/index/index/openapi/id/47.shtml?ptype=1'],
        self::TAOKE_GETTBKPUBLISHERINFO => ['title' => '(重构版)淘宝客渠道商信息查询API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/70.shtml?ptype=1'],
        self::INDEX_EXTAPI_TBKRELATIONBEIAN => ['title' => '渠道商一键备案API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/74.shtml?ptype=1'],
        self::TAOKE_GETRELATIONOAUTHTPWD => ['title' => '(重构)新渠道商一键备案API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/75.shtml?ptype=1'],
        self::TAOKE_GETINVITECODE => ['title' => '(重构版)淘宝客邀请码生成API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/7.shtml?ptype=1'],
        self::TAOKE_GETTBKQDBEIAN => ['title' => '(重构版)淘宝客渠道信息备案API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/8.shtml?ptype=1'],
        self::PLATFORM_GETPAYMENTORDERLIST => ['title' => '代付订单查询API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/76.shtml?ptype=1'],
        self::PLATFORM_PAYMENTTOALIPAY => ['title' => '[平台重构版]转帐到支付宝帐户(付款)API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/42.shtml?ptype=1'],
        self::PLATFORM_GETPAYMENTBALANCE => ['title' => '(重构版)支付宝打款余额查询API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/82.shtml?ptype=1'],
        self::OP_API_V1_DAIFUKUAN_MERCHANT => ['title' => '[商户版]转帐到支付宝帐户(在线打款)API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/84.shtml?ptype=1'],
        self::TAOKE_GETTBAUTHLIST => ['title' => '(重构版)获取授权淘客帐号列表', 'url' => 'https://open.21ds.cn/index/index/openapi/id/13.shtml?ptype=1'],
        self::TAOKE_CREATETAOSHORTURL => ['title' => '(重构版)生成淘宝短链接API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/63.shtml?ptype=1'],
        self::PLATFORM_GETQUANCONTENT => ['title' => '(重构版)发圈(朋友圈)内容API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/71.shtml?ptype=1'],
        self::OP_API_V1_GETPROXYIP => ['title' => '代理IP', 'url' => 'https://open.21ds.cn/index/index/openapi/id/38.shtml?ptype=1'],
        self::TAOKE_CREATE_TAOLIJIN => ['title' => '(重构版)淘礼金创建 API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/40.shtml?ptype=1'],
        self::OP_API_V1_TITLEFC => ['title' => '淘宝标题分词 API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/41.shtml?ptype=1'],
        self::API_PLATFORM_IPTOLOCATION => ['title' => 'IP地址查询API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/43.shtml?ptype=1'],
        self::OP_API_V1_WEIXINURLCHECK => ['title' => '微信封禁域名检测 API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/48.shtml?ptype=1'],
        self::PLATFORM_EXPRESSQUERY => ['title' => '快递查询', 'url' => 'https://open.21ds.cn/index/index/openapi/id/187.shtml?ptype=1'],
    ];


}