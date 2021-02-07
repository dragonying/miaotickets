<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**查询是否绑定备案
 * @url https://www.ecapi.cn/index/index/openapi/id/233.shtml?ptype=3
 * Class PinduoduoGetOauthMemberAuthority
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $pdname 在本平台授权的拼多多用户名 示例值：xxxx 
 * @property String $pid 推广位id 示例值：xxxx 
 * @property String $custom_parameters 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；格式为：{"uid":"11111","sid":"22222"}，其中uid用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填；sid上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key 示例值：{"uid":"1111","sid":"222&amp;quot 
 */
class PinduoduoGetOauthMemberAuthority extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'pdname', 'pid'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GETOAUTHMEMBERAUTHORITY, $data);
	}
}