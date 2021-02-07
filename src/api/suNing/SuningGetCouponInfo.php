<?php 

namespace zfy\miao\api\suNing; 

use zfy\miao\base\suNing\SuNingCall; 

/**查询券领用情况
 * @url https://www.ecapi.cn/index/index/openapi/id/215.shtml?ptype=7
 * Class SuningGetCouponInfo
 * @package zfy\miao\api\suNing
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $quanUrl 券URL，urlencode编码 示例值：https%3a%2f%2fquan.suning.com%2flqzx_recommend.do%3factivityId%3 
 * @property String $couponNum 券编码 示例值： 
 */
class SuningGetCouponInfo extends SuNingCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'quanUrl'];

	public function call($data = [])
	{		
		return $this->request(self::SUNING_GETCOUPONINFO, $data);
	}
}