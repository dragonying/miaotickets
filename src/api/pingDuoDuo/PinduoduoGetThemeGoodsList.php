<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**查询主题商品列表
 * @url https://www.ecapi.cn/index/index/openapi/id/175.shtml?ptype=3
 * Class PinduoduoGetThemeGoodsList
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $theme_id 主题ID 示例值：10 
 */
class PinduoduoGetThemeGoodsList extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'theme_id'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GETTHEMEGOODSLIST, $data);
	}
}