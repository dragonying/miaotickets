<?php 

namespace zfy\miao\api\suNing; 

use zfy\miao\base\suNing\SuNingCall; 

/**批量转链
 * @url https://www.ecapi.cn/index/index/openapi/id/212.shtml?ptype=7
 * Class SuningDoBatchCustomUrl
 * @package zfy\miao\api\suNing
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $extend 链接地址，支持批量用,隔开 示例值：https://sugs.suning.com/GLT3WSCh 
 * @property String $subUser 子会员id，不可输入带_的数据 示例值： 
 */
class SuningDoBatchCustomUrl extends SuNingCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'extend'];

	public function call($data = [])
	{		
		return $this->request(self::SUNING_DOBATCHCUSTOMURL, $data);
	}
}