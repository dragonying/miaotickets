<?php 

namespace zfy\miao\api\suNing; 

use zfy\miao\base\suNing\SuNingCall; 

/**关联商品推荐接口
 * @url https://www.ecapi.cn/index/index/openapi/id/217.shtml?ptype=7
 * Class SuningGetMoreRecommendItems
 * @package zfy\miao\api\suNing
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $cityCode 所在地区的行政区号，若是四位区号，则去掉开头的0 示例值：025 
 * @property String $commodityCode 商品编码 示例值：10073327418 
 * @property String $supplierCode 商家编码 示例值：0000000000 
 * @property String $picType 图片类型0方图，1长图，2竖图,默认为0 示例值： 
 * @property String $picLocation 图片位置，默认值2 示例值： 
 * @property String $picWidth 图片宽度，默认640 示例值：640 
 * @property String $picHeight 图片高度，默认640 示例值：640 
 */
class SuningGetMoreRecommendItems extends SuNingCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'commodityCode', 'supplierCode'];

	public function call($data = [])
	{		
		return $this->request(self::SUNING_GETMORERECOMMENDITEMS, $data);
	}
}