<?php 

namespace zfy\miao\base\suNing; 

/**喵有券开放平台 
 * Class Interface\BaseLink 
 * @package zfy\miao\suNing
 */
interface BaseLink
{

	/** ------- 接口路由  -------------   接口路由   --------   接口路由   ---------- 接口路由 --------  */

	/** 精选商品API */
	const SUNING_GETJXITEMS ='/suning/getJxItems';

	/** 关键字商品查询接口(新) */
	const SUNING_GETSEARCHITEMS ='/suning/getSearchItems';

	/** 查询券领用情况 */
	const SUNING_GETCOUPONINFO ='/suning/getCouponInfo';

	/** 第三方联盟链接添加推广商品接口 */
	const SUNING_GETTHIRDPARTYPRODUCTINFO ='/suning/getThirdPartyProductInfo';

	/** 关联商品推荐接口 */
	const SUNING_GETMORERECOMMENDITEMS ='/suning/getMoreRecommendItems';

	/** 商品图文详情查询 */
	const SUNING_GETITEMSIMAGES ='/suning/getItemsImages';

	/** 高佣专区商品查询接口 */
	const SUNING_GETINVESTMENTITEMS ='/suning/getInvestmentItems';

	/** 单个查询联盟商品信息 */
	const SUNING_GETUNIONITEMINFO ='/suning/getUnionItemInfo';

	/** 获取商品或店铺推广链接接口 */
	const SUNING_DOITEMSTOREPROMOTIONURL ='/suning/doItemStorePromotionUrl';

	/** 获取自定义推广链接接口 */
	const SUNING_DOCUSTOMPROMOTIONURL ='/suning/doCustomPromotionUrl';

	/** 商品和券二合一（小程序） */
	const SUNING_DOAPPLETEXTENSIONURL ='/suning/doAppletExtensionUrl';

	/** 批量转链 */
	const SUNING_DOBATCHCUSTOMURL ='/suning/doBatchCustomUrl';

	/** 商品和券二合一接口 */
	const SUNING_DOEXTENSIONURL ='/suning/doExtensionUrl';

	/** 推广订单列表查询 */
	const SUNING_GETORDERLIST ='/suning/getOrderList';



	/** ------- 接口详情  -------------   接口详情   --------   接口详情   ---------- 接口详情 --------  */

	const API_DETAIL = [
 		self::SUNING_GETJXITEMS => ['title' => '精选商品API', 'url' => 'http://api.web.ecapi.cn/suning/getJxItems'],
		self::SUNING_GETSEARCHITEMS => ['title' => '关键字商品查询接口(新)', 'url' => 'http://api.web.ecapi.cn/suning/getSearchItems'],
		self::SUNING_GETCOUPONINFO => ['title' => '查询券领用情况', 'url' => 'http://api.web.ecapi.cn/suning/getCouponInfo'],
		self::SUNING_GETTHIRDPARTYPRODUCTINFO => ['title' => '第三方联盟链接添加推广商品接口', 'url' => 'http://api.web.ecapi.cn/suning/getThirdPartyProductInfo'],
		self::SUNING_GETMORERECOMMENDITEMS => ['title' => '关联商品推荐接口', 'url' => 'http://api.web.ecapi.cn/suning/getMoreRecommendItems'],
		self::SUNING_GETITEMSIMAGES => ['title' => '商品图文详情查询', 'url' => 'http://api.web.ecapi.cn/suning/getItemsImages'],
		self::SUNING_GETINVESTMENTITEMS => ['title' => '高佣专区商品查询接口', 'url' => 'http://api.web.ecapi.cn/suning/getInvestmentItems'],
		self::SUNING_GETUNIONITEMINFO => ['title' => '单个查询联盟商品信息', 'url' => 'http://api.web.ecapi.cn/suning/getUnionItemInfo'],
		self::SUNING_DOITEMSTOREPROMOTIONURL => ['title' => '获取商品或店铺推广链接接口', 'url' => 'http://api.web.ecapi.cn/suning/doItemStorePromotionUrl'],
		self::SUNING_DOCUSTOMPROMOTIONURL => ['title' => '获取自定义推广链接接口', 'url' => 'http://api.web.ecapi.cn/suning/doCustomPromotionUrl'],
		self::SUNING_DOAPPLETEXTENSIONURL => ['title' => '商品和券二合一（小程序）', 'url' => 'http://api.web.ecapi.cn/suning/doAppletExtensionUrl'],
		self::SUNING_DOBATCHCUSTOMURL => ['title' => '批量转链', 'url' => 'http://api.web.ecapi.cn/suning/doBatchCustomUrl'],
		self::SUNING_DOEXTENSIONURL => ['title' => '商品和券二合一接口', 'url' => 'http://api.web.ecapi.cn/suning/doExtensionUrl'],
		self::SUNING_GETORDERLIST => ['title' => '推广订单列表查询', 'url' => 'http://api.web.ecapi.cn/suning/getOrderList'],
 
	];
}