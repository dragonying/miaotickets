<?php 

namespace zfy\miao\api\suNing; 

use zfy\miao\base\suNing\SuNingCall; 

/**商品和券二合一（小程序）
 * @url https://www.ecapi.cn/index/index/openapi/id/210.shtml?ptype=7
 * Class SuningDoAppletExtensionUrl
 * @package zfy\miao\api\suNing
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $productUrl 商品详情页链接 示例值：https://product.suning.com/0000000000/11289998395.html 
 * @property String $quanUrl 券URL 示例值： 
 * @property String $subUser 子会员id，不可输入带_的数据 示例值： 
 */
class SuningDoAppletExtensionUrl extends SuNingCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'productUrl'];

	public function call($data = [])
	{		
		return $this->request(self::SUNING_DOAPPLETEXTENSIONURL, $data);
	}
}