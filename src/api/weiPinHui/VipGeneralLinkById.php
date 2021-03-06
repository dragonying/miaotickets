<?php 

namespace zfy\miao\api\weiPinHui; 

use zfy\miao\base\weiPinHui\WeiPinHuiCall; 

/**根据商品id生成联盟链接
 * @url https://www.ecapi.cn/index/index/openapi/id/197.shtml?ptype=5
 * Class VipGeneralLinkById
 * @package zfy\miao\api\weiPinHui
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $goodsIdList 商品id列表，多个商品用英文,分隔，单次请求商品id不超过50 示例值：xxxx 
 * @property String $chanTag 渠道标识 示例值：xxxx 
 * @property String $key 唯品会授权账号调用key，可在会员中心“唯品会授权列表”页获取，为V开头的字符串 示例值：Vxxxxxxx 
 */
class VipGeneralLinkById extends WeiPinHuiCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'goodsIdList', 'key'];

	public function call($data = [])
	{		
		return $this->request(self::VIP_GENERALLINKBYID, $data);
	}
}