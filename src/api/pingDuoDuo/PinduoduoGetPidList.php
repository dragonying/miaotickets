<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**查询所有推广位API
 * @url https://www.ecapi.cn/index/index/openapi/id/17.shtml?ptype=3
 * Class PinduoduoGetPidList
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $pdname 在本平台授权后的拼多多用户名 示例值：xxxxx 
 * @property Number $page 第几页 示例值：1 
 * @property Number $page_size 每页显示几条 示例值：10 
 */
class PinduoduoGetPidList extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'pdname'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GETPIDLIST, $data);
	}
}