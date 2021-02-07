<?php 

namespace zfy\miao\api\suNing; 

use zfy\miao\base\suNing\SuNingCall; 

/**获取自定义推广链接接口
 * @url https://www.ecapi.cn/index/index/openapi/id/209.shtml?ptype=7
 * Class SuningDoCustomPromotionUrl
 * @package zfy\miao\api\suNing
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $visitUrl 需要定制的链接(允许定制商品，店铺，频道及活动促销页面，其它页面暂不支持定制) 示例值： 
 * @property String $subUser 子会员id，不可输入带_的数据 示例值： 
 */
class SuningDoCustomPromotionUrl extends SuNingCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'visitUrl'];

	public function call($data = [])
	{		
		return $this->request(self::SUNING_DOCUSTOMPROMOTIONURL, $data);
	}
}