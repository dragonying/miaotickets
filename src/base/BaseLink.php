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
    const USER_PID_KEY = 'pid';


    const BASE_URL = 'http://api.web.21ds.cn';

    /** ------- 转链接口    -------------    转链接口    --------   转链接口    ------------------  */
    const HIGH_PROMOTION_LINK_BY_GOODS_ID = '/taoke/doItemHighCommissionPromotionLink';//高佣转链接API(商品ID)

    const HIGH_PROMOTION_LINK_BY_T_PWD = '/taoke/doItemHighCommissionPromotionLinkByTpwd';//高佣转链接API(淘口令)

    const SCLICK_TO_ID = '/taoke/sclicktoid';//sclick链接解析api

    const SHOP_TO_API = '/taoke/doShopCovert';//淘宝客店铺转链API

    const TBK_ACTIVE_LINK = '/taoke/getTbkActivityLink';//淘宝联盟官方活动推广API

    const  HIGH_PROMOTION_LINK_BY_ALL = '/taoke/doItemHighCommissionPromotionLinkByAll';//万能高佣转链API接口

    const TBK_ACTIVE_INFO = '/taoke/getTbkActivityInfo';//淘客官方活动推广(更新版)


    /** ------- 商品接口    -------------    商品接口    --------   商品接口    ------------------  */

    const TB_CATEGORY ='/platform/getTbCategory';//淘宝商品分类API

    const GOODS_ITEM_INFO = '/taoke/getItemInfo';//获取简版淘客商品信息API

    const GOODS_PERFECT_MATERIAL_ITEM ='/taoke/getMaterialItem';//物料精选[猜你喜欢]

    const GOODS_BELONG_MATERIAL_ITEM ='/taoke/getMaterialItem';//专属店铺物料接口

    const GET_GOODS_INFO_FROM_TB ='/taoke/getTkMaterialItem';//全网淘客商品查询API

    const GET_TK_SHOP_INFO = '/taoke/getTbkShop';//淘宝客店铺查询API

    const GET_ITEM_LIST = '/platform/getItemList';//淘抢购/聚划算/9.9元淘客商品库 API

}