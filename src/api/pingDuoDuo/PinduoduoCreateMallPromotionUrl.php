<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**创建商城推广链接
 * @url https://www.ecapi.cn/index/index/openapi/id/15.shtml?ptype=3
 * Class PinduoduoCreateMallPromotionUrl
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $pdname 在本平台授权后的拼多多用户名 示例值：xxxxx 
 * @property String $p_id_list 推广位列表，例如：["60005_612"] 示例值：["60005_612"] 
 * @property Number $channel_type 0,"1.9包邮"；1,"今日爆款"；2,"品牌清仓"；4,"PC端专属商城" 示例值：3 
 * @property String $generate_short_url 是否生成短链接，true-是，false-否，默认false 示例值：true 
 * @property String $generate_mobile 是否生成手机跳转链接，true-是，false-否，默认false 示例值：true 
 * @property String $multi_group 单人团多人团标志，true-多人团，false-单人团默认false 示例值：true 
 * @property String $custom_parameters 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节 示例值：xxxxx 
 * @property String $generate_weapp_webview 是否唤起微信客户端，默认false否，true是 示例值：true 
 * @property String $we_app_web_view_short_url 唤起微信app推广短链接，true-是，false-否，默认false 示例值：true 
 * @property String $we_app_web_wiew_url 唤起微信app推广链接，true-是，false-否，默认false 示例值：true 
 */
class PinduoduoCreateMallPromotionUrl extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'pdname', 'p_id_list'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_CREATEMALLPROMOTIONURL, $data);
	}
}