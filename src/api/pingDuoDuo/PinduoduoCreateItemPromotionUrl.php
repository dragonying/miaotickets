<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**获取拼多多商品推广链接API
 * @url https://www.ecapi.cn/index/index/openapi/id/18.shtml?ptype=3
 * Class PinduoduoCreateItemPromotionUrl
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $p_id 推广位ID 示例值：1000 
 * @property String $goods_id_list 商品ID，["271998458"]，只支持单个 示例值：["271998458"] 
 * @property String $pdname 在本平台授权后的拼多多用户名 示例值：xxxxx 
 * @property String $generate_short_url 是否生成短链接，true-是，false-否，默认false 示例值：true 
 * @property String $multi_group true--生成多人团推广链接false--生成单人团推广链接（默认false），1、单人团推广链接：用户访问单人团推广链接，可直接购买商品无需拼团。2、多人团推广链接：用户访问双人团推广链接开团，若用户分享给他人参团，则开团者和参团者的佣金均结算给推手 示例值：true 
 * @property String $custom_parameters 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节。 示例值：xxxxx 
 * @property String $pull_new 是否开启订单拉新，true表示开启，订单拉新奖励特权仅支持白名单，请联系拼多多相关工作人员开通 示例值： 
 * @property String $generate_weapp_webview 是否生成唤起微信客户端链接，true-是，false-否，默认false 示例值：true 
 * @property String $zs_duo_id 招商多多客ID 示例值：100 
 * @property String $generate_mall_collect_coupon 是否生成店铺收藏券推广链接 示例值：true 
 * @property String $generate_qq_app 是否生成qq小程序 示例值：true 
 * @property String $generate_schema_url 是否返回schemaURL 示例值：true 
 * @property String $generate_weiboapp_webview 是否生成微博推广链接 示例值：true 
 * @property String $generate_we_app 是否生成小程序推广 示例值：false 
 * @property String $force_duo_id 是否使用多多客专属推广计划 示例值：false 
 * @property String $generate_authority_url 是否生成带授权的单品链接。如果未授权，则会走授权流程 示例值：true 
 * @property String $search_id 搜索id，建议填写，提高收益。来自"(重构版)查询拼多多推广商品API"等接口 示例值： 
 * @property String $goods_sign 商品goodsSign，仅支持单个生链。goodsId和goodsSign必须传入其中一个，建议使用goods_sign_list传入goodsSign 示例值： 
 * @property String $goods_sign_list 商品goodsSign列表，支持批量生链，多个,分隔 示例值：aa,bb,cc 
 */
class PinduoduoCreateItemPromotionUrl extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'p_id', 'pdname'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_CREATEITEMPROMOTIONURL, $data);
	}
}