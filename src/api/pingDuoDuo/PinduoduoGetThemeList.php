<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**查询主题列表
 * @url https://www.ecapi.cn/index/index/openapi/id/174.shtml?ptype=3
 * Class PinduoduoGetThemeList
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $page_size 每页数量 示例值：10 
 * @property Number $page 页码 示例值：1 
 */
class PinduoduoGetThemeList extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GETTHEMELIST, $data);
	}
}