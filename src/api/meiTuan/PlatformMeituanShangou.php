<?php 

namespace zfy\miao\api\meiTuan; 

use zfy\miao\base\meiTuan\MeiTuanCall; 

/**美团闪购CPS推广
 * @url https://www.ecapi.cn/index/index/openapi/id/245.shtml?ptype=6
 * Class PlatformMeituanShangou
 * @package zfy\miao\api\meiTuan
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $eid 用户自定义数据，仅只输入小写数字及字母内容，可使用本字段来跟踪会员订单 示例值：common 
 */
class PlatformMeituanShangou extends MeiTuanCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'eid'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_MEITUAN_SHANGOU, $data);
	}
}