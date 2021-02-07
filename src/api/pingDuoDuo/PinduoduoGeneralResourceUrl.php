<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**拼多多主站频道推广接口
 * @url https://www.ecapi.cn/index/index/openapi/id/236.shtml?ptype=3
 * Class PinduoduoGeneralResourceUrl
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $custom_parameters 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；格式为：{"uid":"11111","sid":"22222"}，其中uid用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填；sid上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key 示例值： 
 * @property String $generate_we_app 是否生成小程序 示例值：true 
 * @property String $pid 推广位 示例值：xxxx 
 * @property String $resource_type 频道来源：4-限时秒杀,39997-充值中心,39998-转链type，39999-电器城，39996-百亿补贴 示例值：39996 
 * @property String $url 原链接（需要进行urlencode编码） 示例值： 
 * @property String $generate_schema_url 是否返回schemaURL 示例值：true 
 * @property String $generate_qq_app 是否生成qq小程序 示例值：true 
 * @property String $pdname 在本平台授权的拼多多用户名 示例值：xxxx 
 */
class PinduoduoGeneralResourceUrl extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'pid', 'pdname'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GENERALRESOURCEURL, $data);
	}
}