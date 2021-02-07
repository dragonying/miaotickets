<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**创建推广位接口
 * @url https://www.ecapi.cn/index/index/openapi/id/16.shtml?ptype=3
 * Class PinduoduoCreatePid
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $pdname 在本平台授权后的拼多多用户名 示例值：xxxxx 
 * @property Number $number 要生成的推广位数量，范围为：1~100 示例值：10 
 * @property String $p_id_name_list 推广位名称，例如["1","2"] 示例值：["1","2"] 
 * @property String $media_id 媒体id 示例值：xxxx 
 */
class PinduoduoCreatePid extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'pdname', 'number'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_CREATEPID, $data);
	}
}