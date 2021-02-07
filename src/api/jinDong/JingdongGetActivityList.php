<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**活动查询接口
 * @url https://www.ecapi.cn/index/index/openapi/id/229.shtml?ptype=2
 * Class JingdongGetActivityList
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $pageIndex 页码，默认1 示例值：1 
 * @property Number $pageSize 每页数量，默认20，上限50 示例值：20 
 */
class JingdongGetActivityList extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::JINGDONG_GETACTIVITYLIST, $data);
	}
}