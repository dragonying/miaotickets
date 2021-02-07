<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**发圈(朋友圈)内容API
 * @url https://www.ecapi.cn/index/index/openapi/id/71.shtml?ptype=2
 * Class PlatformGetQuanContent
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $page 第几页 示例值：1 
 * @property Number $pagesize 每页几条数据 示例值：10 
 */
class PlatformGetQuanContent extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'page', 'pagesize'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_GETQUANCONTENT, $data);
	}
}