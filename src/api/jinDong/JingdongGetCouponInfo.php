<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**优惠券信息查询
 * @url https://www.ecapi.cn/index/index/openapi/id/53.shtml?ptype=2
 * Class JingdongGetCouponInfo
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $couponUrls 优惠券地址，需要进行Urlencode编码 示例值：http://coupon.jd.com/xxxxx 
 */
class JingdongGetCouponInfo extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'couponUrls'];

	public function call($data = [])
	{		
		return $this->request(self::JINGDONG_GETCOUPONINFO, $data);
	}
}