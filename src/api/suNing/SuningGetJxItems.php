<?php 

namespace zfy\miao\api\suNing; 

use zfy\miao\base\suNing\SuNingCall; 

/**精选商品API
 * @url https://www.ecapi.cn/index/index/openapi/id/207.shtml?ptype=7
 * Class SuningGetJxItems
 * @package zfy\miao\api\suNing
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $eliteId 默认为1,,营销id。1-小编推荐；2-实时热销榜；3-当日热推榜；4-高佣爆款榜；5-团长招商榜；6-9块9专区 示例值：1 
 * @property String $pageIndex 页码默认0 示例值：1 
 * @property String $cityCode 城市编码默认025 示例值：025 
 * @property String $picWidth 图片宽度 示例值：200 
 * @property String $picHeight 图片高度 示例值：200 
 * @property String $selfSupport 是否苏宁自营。0：全部；1：是 示例值：1 
 * @property String $size 每页数量 示例值：10 
 * @property String $couponMark 1表示拿到券后价，不传按照以前逻辑取不到券后价 示例值：1 
 */
class SuningGetJxItems extends SuNingCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::SUNING_GETJXITEMS, $data);
	}
}