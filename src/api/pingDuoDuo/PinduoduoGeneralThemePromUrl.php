<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**多多进宝主题推广链接生成接口
 * @url https://www.ecapi.cn/index/index/openapi/id/237.shtml?ptype=3
 * Class PinduoduoGeneralThemePromUrl
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $pdname 在本平台授权的拼多多用户名 示例值：xxxxxx 
 * @property String $theme_id_list 主题ID列表,例如：1,235,7602 示例值：7602 
 * @property String $pid 推广位ID 示例值：xxxx 
 * @property String $custom_parameters 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；格式为：{"uid":"11111","sid":"22222"}，其中uid用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填；sid上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key 示例值：xxxxxx 
 * @property String $generate_mobile 是否生成手机跳转链接。true-是,false-否,默认false 示例值：true 
 * @property String $generate_qq_app 是否生成qq小程序 示例值：true 
 * @property String $generate_schema_url 是否返回schemaURL 示例值：true 
 * @property String $generate_short_url 是否生成短链接,true-是,false-否 示例值：true 
 * @property String $generate_weapp_webview 是否唤起微信客户端，默认false否，true是 示例值：true 
 * @property String $generate_we_app 是否生成小程序链接 示例值：true 
 */
class PinduoduoGeneralThemePromUrl extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'pdname', 'theme_id_list', 'pid'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GENERALTHEMEPROMURL, $data);
	}
}