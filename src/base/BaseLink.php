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

    /** ------- 商品接口    -------------    商品接口    --------   商品接口    ------------------  */
    const PLATFORM_GETTBCATEGORY  = '/platform/getTbCategory';
    const TAOKE_GETITEMINFO       = '/taoke/getItemInfo';
    const TAOKE_GETMATERIALITEM   = '/taoke/getMaterialItem';
    const TAOKE_GETTKMATERIALITEM = '/taoke/getTkMaterialItem';
    const TAOKE_GETTBKSHOP        = '/taoke/getTbkShop';
    const PLATFORM_GETITEMLIST    = '/platform/getItemList';

    /** ------- 转链接口    -------------    转链接口    --------   转链接口    ------------------  */
    const TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINK       = '/taoke/doItemHighCommissionPromotionLink';
    const TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINKBYTPWD = '/taoke/doItemHighCommissionPromotionLinkByTpwd';
    const TAOKE_SCLICKTOID                              = '/taoke/sclicktoid';
    const TAOKE_DOSHOPCOVERT                            = '/taoke/doShopCovert';
    const TAOKE_GETTBKACTIVITYLINK                      = '/taoke/getTbkActivityLink';
    const TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINKBYALL  = '/taoke/doItemHighCommissionPromotionLinkByAll';
    const TAOKE_GETTBKACTIVITYINFO                      = '/taoke/getTbkActivityInfo';


    /** ------- detail    -------------    detail    --------   detail    ------------------  */
    const API_DETAIL = [
        self::PLATFORM_GETTBCATEGORY => ['title' => '淘宝商品分类API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/124.shtml?ptype=1'],
        self::TAOKE_GETITEMINFO => ['title' => '获取简版淘客商品信息API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/11.shtml?ptype=1'],
        self::TAOKE_GETMATERIALITEM => ['title' => '物料精选[猜你喜欢]', 'url' => 'https://open.21ds.cn/index/index/openapi/id/159.shtml?ptype=1'],
        self::TAOKE_GETTKMATERIALITEM => ['title' => '全网淘客商品查询API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/9.shtml?ptype=1'],
        self::TAOKE_GETTBKSHOP => ['title' => '淘宝客店铺查询API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/49.shtml?ptype=1'],
        self::PLATFORM_GETITEMLIST => ['title' => '淘抢购/聚划算/9.9元淘客商品库 API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/50.shtml?ptype=1'],
        self::TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINK => ['title' => '高佣转链接API(商品ID)', 'url' => 'https://open.21ds.cn/index/index/openapi/id/1.shtml?ptype=1'],
        self::TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINKBYTPWD => ['title' => '高佣转链接API(淘口令)', 'url' => 'https://open.21ds.cn/index/index/openapi/id/6.shtml?ptype=1'],
        self::TAOKE_SCLICKTOID => ['title' => 'sclick链接解析api', 'url' => 'https://open.21ds.cn/index/index/openapi/id/45.shtml?ptype=1'],
        self::TAOKE_DOSHOPCOVERT => ['title' => '淘宝客店铺转链API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/86.shtml?ptype=1'],
        self::TAOKE_GETTBKACTIVITYLINK => ['title' => '淘宝联盟官方活动推广API', 'url' => 'https://open.21ds.cn/index/index/openapi/id/69.shtml?ptype=1'],
        self::TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINKBYALL => ['title' => '万能高佣转链API接口', 'url' => 'https://open.21ds.cn/index/index/openapi/id/72.shtml?ptype=1'],
        self::TAOKE_GETTBKACTIVITYINFO => ['title' => '淘客官方活动推广(更新版)', 'url' => 'https://open.21ds.cn/index/index/openapi/id/193.shtml?ptype=1']
    ];

}