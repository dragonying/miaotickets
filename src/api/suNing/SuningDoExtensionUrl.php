<?php 

namespace zfy\miao\api\suNing; 

use zfy\miao\base\suNing\SuNingCall; 

/**商品和券二合一接口
 * @url https://www.ecapi.cn/index/index/openapi/id/220.shtml?ptype=7
 * Class SuningDoExtensionUrl
 * @package zfy\miao\api\suNing
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $productUrl 商品的URL仅支持拼购和易购单品 示例值：https://product.suning.com/0000000000/10073327418.html 
 * @property String $quanUrl 券URL有时生成券推广，没有时生成商品推广 示例值： 
 * @property String $subUser 子会员编码 示例值： 
 */
class SuningDoExtensionUrl extends SuNingCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'productUrl'];

	public function call($data = [])
	{		
		return $this->request(self::SUNING_DOEXTENSIONURL, $data);
	}
}