<?php 

namespace zfy\miao\api\weiPinHui; 

use zfy\miao\base\weiPinHui\WeiPinHuiCall; 

/**推广链接解析
 * @url https://www.ecapi.cn/index/index/openapi/id/199.shtml?ptype=5
 * Class VipChangeCpsUrlToItem
 * @package zfy\miao\api\weiPinHui
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $key 唯品会授权账号调用key，可在会员中心“唯品会授权列表”页获取，为V开头的字符串 示例值：Vxxxxxxx 
 * @property String $source 请求源：调用方自定义，标识请求应用即可，无业务含义 示例值：xxxx 
 * @property String $content 检查的内容(长度不超过10000) 示例值：xxxx 
 */
class VipChangeCpsUrlToItem extends WeiPinHuiCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'key', 'source', 'content'];

	public function call($data = [])
	{		
		return $this->request(self::VIP_CHANGECPSURLTOITEM, $data);
	}
}