<?php 

namespace zfy\miao\api\suNing; 

use zfy\miao\base\suNing\SuNingCall; 

/**高佣专区商品查询接口
 * @url https://www.ecapi.cn/index/index/openapi/id/219.shtml?ptype=7
 * Class SuningGetInvestmentItems
 * @package zfy\miao\api\suNing
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $pageIndex 页码默认为0 示例值：1 
 * @property String $cityCode 城市编码默认为025 示例值：025 
 * @property String $picWidth 图片宽度默认为200 示例值：200 
 * @property String $picHeight 图片高度默认为200 示例值：200 
 * @property String $categoryId 高佣类目ID默认为第一个类目 示例值： 
 * @property String $size 每页条数默认10 示例值：10 
 * @property String $couponMark 1表示拿到券后价，不传按照以前逻辑取不到券后价 示例值：1 
 */
class SuningGetInvestmentItems extends SuNingCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::SUNING_GETINVESTMENTITEMS, $data);
	}
}