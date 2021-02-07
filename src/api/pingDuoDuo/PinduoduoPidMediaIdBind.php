<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**批量绑定推广位的媒体id
 * @url https://www.ecapi.cn/index/index/openapi/id/250.shtml?ptype=3
 * Class PinduoduoPidMediaIdBind
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $pdname 在本平台授权的拼多多用户名 示例值：xxxx 
 * @property String $media_id 媒体id 示例值：xxxx 
 * @property String $pid_list pid列表，多个用,分隔 示例值：xxxx,xxx 
 */
class PinduoduoPidMediaIdBind extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'pdname', 'media_id', 'pid_list'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_PIDMEDIAIDBIND, $data);
	}
}