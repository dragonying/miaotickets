<?php 

namespace zfy\miao\api\weiPinHui; 

use zfy\miao\base\weiPinHui\WeiPinHuiCall; 

/**创建推广位
 * @url https://www.ecapi.cn/index/index/openapi/id/195.shtml?ptype=5
 * Class VipCreatePid
 * @package zfy\miao\api\weiPinHui
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $key 唯品会授权账号调用key，可在会员中心“唯品会授权列表”页获取，为V开头的字符串 示例值：Vxxxxxxx 
 * @property String $pidNameList 需要生成的推广位名称列表注：1、一次支持批量最大100个2、每个推广位的名称最长50个字符 示例值：xxxx 
 */
class VipCreatePid extends WeiPinHuiCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'key', 'pidNameList'];

	public function call($data = [])
	{		
		return $this->request(self::VIP_CREATEPID, $data);
	}
}