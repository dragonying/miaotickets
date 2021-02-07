<?php 

namespace zfy\miao\api\weiPinHui; 

use zfy\miao\base\weiPinHui\WeiPinHuiCall; 

/**查询推广位
 * @url https://www.ecapi.cn/index/index/openapi/id/196.shtml?ptype=5
 * Class VipQueryPid
 * @package zfy\miao\api\weiPinHui
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $pidList 推广为Id。该参数不传时，会返回该userId下对应的所有的pid信息列表。 示例值：xxxx 
 * @property Number $page 页码 示例值：1 
 * @property Number $pageSize 页面大小：默认100 示例值：20 
 * @property String $key 唯品会授权账号调用key，可在会员中心“唯品会授权列表”页获取，为V开头的字符串 示例值：Vxxxxxxx 
 */
class VipQueryPid extends WeiPinHuiCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'key'];

	public function call($data = [])
	{		
		return $this->request(self::VIP_QUERYPID, $data);
	}
}