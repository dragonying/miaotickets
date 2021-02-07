<?php 

namespace zfy\miao\api\weiPinHui; 

use zfy\miao\base\weiPinHui\WeiPinHuiCall; 

/**获取指定商品id的商品信息
 * @url https://www.ecapi.cn/index/index/openapi/id/194.shtml?ptype=5
 * Class VipGetGoodsInfo
 * @package zfy\miao\api\weiPinHui
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $key 唯品会授权账号调用key，可在会员中心“唯品会授权列表”页获取，为V开头的字符串 示例值：Vxxxxxxx 
 * @property String $goodsIdList 商品id列表，多个商品用英文,分隔 示例值：12456,789465 
 */
class VipGetGoodsInfo extends WeiPinHuiCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'key', 'goodsIdList'];

	public function call($data = [])
	{		
		return $this->request(self::VIP_GETGOODSINFO, $data);
	}
}