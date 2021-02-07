<?php 

namespace zfy\miao\api\suNing; 

use zfy\miao\base\suNing\SuNingCall; 

/**第三方联盟链接添加推广商品接口
 * @url https://www.ecapi.cn/index/index/openapi/id/216.shtml?ptype=7
 * Class SuningGetThirdPartyProductInfo
 * @package zfy\miao\api\suNing
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $detailUrl 商品详情页链接 示例值：https://product.suning.com/0000000000/10073327418.html 
 * @property String $statParam 子会员编码(不能含=&amp;_这个三个符号) 示例值：1 
 */
class SuningGetThirdPartyProductInfo extends SuNingCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'detailUrl', 'statParam'];

	public function call($data = [])
	{		
		return $this->request(self::SUNING_GETTHIRDPARTYPRODUCTINFO, $data);
	}
}